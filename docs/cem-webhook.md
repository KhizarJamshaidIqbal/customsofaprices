# CEM Webhook Integration — Custom Sofa Prices

## What is CEM?

**CEM** (Custom Email Management) is a WordPress plugin hosted on a separate WP install that acts as a central inbox for all customer-facing form submissions. It provides admin alerts, SMTP, threading, dashboard replies, and IMAP polling — all configured in the CEM admin panel.

This site sends form submissions **to** CEM. Everything CEM does after receiving a `201` is out of scope.

## Architecture

```
┌─────────────────────────────────┐
│  Browser (customer)             │
│  ┌────────────────────────────┐ │
│  │ contact.php / collection.php│ │
│  │ ┌─────────┐ ┌─────────────┐│ │
│  │ │WhatsApp  │ │ Email       ││ │
│  │ │Button    │ │ Button      ││ │
│  │ └────┬────┘ └──────┬──────┘│ │
│  └──────┼─────────────┼───────┘ │
│         │             │         │
│  fire & forget    awaited fetch │
│  + wa.me open    + inline status│
└─────────┼─────────────┼─────────┘
          │             │
          ▼             ▼
┌─────────────────────────────────┐
│  /contact-submit.php            │
│  (same-origin PHP proxy)        │
│  • Validates input              │
│  • Honeypot check               │
│  • HMAC-SHA256 signs payload    │
│  • cURL POST to CEM webhook    │
└────────────────┬────────────────┘
                 │
                 ▼
┌─────────────────────────────────┐
│  CEM Webhook                    │
│  (WP REST API endpoint)         │
│  POST /wp-json/cem/v1/webhook/  │
│       account/{id}              │
│  ← 201 {"ok":true,"data":{...}} │
└─────────────────────────────────┘
```

## Button Behaviour

| Button | User Action | JS Behaviour | CEM Ingest | User Sees |
|--------|-----------|-------------|-----------|----------|
| **Send via WhatsApp** | Click | `e.preventDefault()` → validate → fire-and-forget `fetch` with `keepalive:true` → `window.open(wa.me/...)` | Background (best-effort) | WhatsApp opens with prefilled message |
| **Send via Email** | Click | `e.preventDefault()` → validate → `setBusy(true)` → awaited `fetch` → strict JSON parse | Awaited, must succeed | Inline: "Sending..." → "Sent. Team will reply to {email} within 4 hours" or error with WhatsApp fallback |
| **`mailto:` href** | No-JS fallback | Not intercepted (JS not available) | None | Mail client opens (graceful degradation) |

## Environment Variables

### Location

| Environment | Path |
|-------------|------|
| **Local dev** (XAMPP) | `inc/.env` (gitignored) |
| **Production** (Hostinger) | One level above `public_html` — e.g. `/home/u123456789/.env` |

### Variables

| Variable | Source | Example |
|----------|--------|---------|
| `CEM_WEBHOOK_URL` | CEM Admin → Accounts → edit → Webhook → Payload URL | `https://booking.example.com/wp-json/cem/v1/webhook/account/1` |
| `CEM_WEBHOOK_SECRET` | CEM Admin → Accounts → edit → Webhook → Secret (48-char hex) | `95e6b5bc89b318...` |
| `CEM_ALLOWED_ORIGIN` | Your site's origin(s), comma-separated | `https://cutomsofaprices.com,https://www.cutomsofaprices.com` |
| `CEM_CA_BUNDLE` | (Optional) Path to CA cert bundle for SSL | `C:\xampp\php\extras\cacert.pem` |

### How to create the .env on Hostinger

1. SSH into your Hostinger server
2. Navigate one level above `public_html`: `cd ~/`
3. Create the file: `nano .env`
4. Paste:
   ```
   CEM_WEBHOOK_URL=<paste your Payload URL from CEM admin>
   CEM_WEBHOOK_SECRET=<paste your 48-char hex Secret from CEM admin>
   CEM_ALLOWED_ORIGIN=https://cutomsofaprices.com,https://www.cutomsofaprices.com
   ```
5. Save and exit. **Do not commit this file to git.**

## Secret Rotation

1. In CEM admin → Accounts → "Custom Sofa Prices" → Webhook → click "Regenerate Secret"
2. Copy the new 48-char hex secret
3. Update the `.env` file on the production server with the new `CEM_WEBHOOK_SECRET=`
4. Test with the curl command below

## Failure Modes

| Upstream Response | PHP Proxy Returns | User Sees |
|-------------------|-------------------|-----------|
| `201 {"ok":true}` | `200 {"ok":true}` | "Sent! Team will reply within 4 hours" |
| `400 missing_email` | `502 upstream_rejected` | "Could not send (status 502). Please try WhatsApp" |
| `403 signature_mismatch` | `502 upstream_rejected` | Same as above — secret needs rotation |
| `404 not_found` | `502 upstream_rejected` | Same — account ID is wrong |
| `423 disabled` | `502 upstream_rejected` | Same — webhook is disabled in CEM admin |
| cURL timeout | `502 upstream_unreachable` | "Network error. Please try WhatsApp" |
| Missing env vars | `502 upstream_misconfigured` | Same error |

## Security Checklist

- [ ] `.env` is **not** in the git repo (gitignored)
- [ ] Secret is **never** logged, echoed, or returned to the client
- [ ] CORS allowlist only permits exact origin matches
- [ ] Honeypot field silently absorbs bot submissions
- [ ] `CURLOPT_SSL_VERIFYPEER=true` and `CURLOPT_SSL_VERIFYHOST=2` always set
- [ ] Field lengths are capped (190 chars for short fields, 5000 for message)
- [ ] No PII is logged — only HTTP status codes

## Smoke Test (curl)

### Test the PHP proxy locally (XAMPP)

```bash
# Should return 405
curl -X GET http://localhost/contact-submit

# Honeypot should return 200 silently
curl -X POST http://localhost/contact-submit \
  -H "Content-Type: application/json" \
  -d '{"name":"Bot","email":"bot@test.com","message":"spam","website_url":"http://spam.com"}'

# Invalid email should return 400
curl -X POST http://localhost/contact-submit \
  -H "Content-Type: application/json" \
  -d '{"name":"Test","email":"not-an-email","message":"test"}'

# Valid submission (requires .env configured)
curl -X POST http://localhost/contact-submit \
  -H "Content-Type: application/json" \
  -d '{"name":"Smoke Test","email":"test@example.com","phone":"03001234567","subject":"Test","message":"CEM integration smoke test"}'
```

### Test CEM webhook directly (bypasses proxy)

```bash
BODY='{"name":"Direct Test","email":"test@example.com","subject":"Direct curl test","message":"Testing CEM webhook directly","phone":"03001234567","source":"curl-test","page":"smoke-test","intent":"test","submitted_at":"2025-01-01T00:00:00+00:00"}'

SECRET="<your CEM_WEBHOOK_SECRET from .env>"

SIG=$(echo -n "$BODY" | openssl dgst -sha256 -hmac "$SECRET" | awk '{print $NF}')

curl -v -X POST \
  "<your CEM_WEBHOOK_URL from .env>" \
  -H "Content-Type: application/json" \
  -H "X-CEM-Signature: sha256=$SIG" \
  -d "$BODY"

# Expected: 201 {"ok":true,"data":{"thread_id":N,"message_id":N}}
```

### Post-deploy browser test

1. **Hard refresh** the page with `Ctrl+F5` (old cached JS will hide changes)
2. Fill all form fields with test data
3. Click **Send via WhatsApp** → WhatsApp opens AND CEM thread appears within 1-2 seconds
4. Click **Send via Email** → mail client does NOT open, inline status shows "Sending..." → "Sent" → form resets, AND a CEM thread appears
5. **Honeypot test**: Open DevTools → set `website_url` input value to anything → submit → CEM receives nothing
6. **Bad secret test**: Mutate one hex char in `.env` → user sees 502 error → revert

## Files Changed

| File | Action | Lines |
|------|--------|-------|
| `inc/cem-env.php` | NEW | ~75 |
| `contact-submit.php` | NEW | ~190 |
| `inc/.env.example` | NEW | ~22 |
| `docs/cem-webhook.md` | NEW | this file |
| `contact.php` | MODIFIED | form + JS (~200 lines added) |
| `collection.php` | MODIFIED | form + JS (~200 lines added) |
| `.gitignore` | MODIFIED | +2 lines |

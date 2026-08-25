---
name: api-sync
description: "REQUIRED after creating any backend API endpoint. Ensures frontend API documentation and configuration stay in sync with backend. Use when adding new routes, updating existing endpoints, or creating new API categories. Updates api-docs, api.ts config, and endpoint data files."
---

# API Sync Skill

## Overview

When a new API endpoint is created in the backend, multiple frontend files MUST be updated to keep the system in sync. This skill ensures no file is missed.

**Core principle:** Backend API creation is NOT complete until frontend docs are updated.

## Development Server Ports

**Frontend runs on:** `http://localhost:8080/` (or 8081, 8082 as fallbacks)
**Backend runs on:** `http://localhost:5001/api`

When testing API docs page, navigate to: `http://localhost:8080/api-docs`

**This skill is MANDATORY after:**
- Creating new backend routes
- Adding new endpoints to existing routes
- Creating new API categories
- Modifying existing endpoint signatures

## Files That Must Be Updated

### 1. API Endpoints Data (Required)
**Location:** `src/pages/api-docs/components/api-routes/data/<category>Endpoints.ts`

This is where the endpoint documentation lives. Each endpoint needs:
- Method (GET, POST, PUT, DELETE, PATCH)
- Path
- Description
- Parameters/Query/Body definitions
- Response examples
- Status codes
- Authentication requirements

### 2. API Config (If New Category)
**Location:** `src/config/api.ts`

Update these sections if adding a NEW category:
- `API_CATEGORIES` object
- `CATEGORY_ORDER` array

### 3. Endpoints Index (If New File)
**Location:** `src/pages/api-docs/components/api-routes/data/index.ts`

If you created a new `*Endpoints.ts` file:
- Add import statement
- Add to `endpointData` array
- Add to re-exports

## The Process

### Step 1: Identify What Was Created
After creating a backend route, identify:
- Category name (e.g., "Products", "Orders", "Reviews")
- All endpoints added (method + path)
- For each endpoint: auth requirements, parameters, body, response

### Step 2: Find or Create Endpoint File
```
Check if exists: src/pages/api-docs/components/api-routes/data/<category>Endpoints.ts

IF exists:
  → Add new endpoints to existing array
  
IF not exists:
  → Create new file following template (Step 3)
  → Update index.ts (Step 4)
  → Update api.ts config (Step 5)
```

### Step 3: Endpoint Definition Template

```typescript
import { Endpoint } from '../types/endpointTypes';

export const <category>Endpoints: Endpoint[] = [
    {
        method: 'GET',                    // HTTP method
        path: '/api/<category>',          // Full path with /api prefix
        description: 'Short description', // Brief description
        longDescription: 'Detailed...',   // Optional: fuller explanation
        requiresAuth: false,              // true if needs JWT
        admin: false,                     // true if admin only
        roles: ['admin', 'super_admin'],  // Optional: allowed roles
        category: '<Category Name>',      // Must match API_CATEGORIES
        
        // Query parameters (for GET requests)
        query: {
            page: { type: 'number', description: 'Page number', required: false, default: 1 },
            limit: { type: 'number', description: 'Items per page', required: false, default: 20 },
            search: { type: 'string', description: 'Search term', required: false }
        },
        
        // URL parameters
        params: {
            id: { type: 'string', description: 'Item ID', required: true }
        },
        
        // Request body (for POST/PUT)
        body: {
            name: { type: 'string', description: 'Item name', required: true },
            isActive: { type: 'boolean', description: 'Active status', required: false, default: true }
        },
        
        // Response examples
        response: {
            success: { 
                success: true, 
                data: { _id: "507f1f77bcf86cd799439011", name: "Example" } 
            }
        },
        
        // Status codes
        statusCodes: [
            { code: 200, description: 'Success' },
            { code: 400, description: 'Bad request' },
            { code: 401, description: 'Unauthorized' },
            { code: 404, description: 'Not found' },
            { code: 500, description: 'Server error' }
        ],
        
        // Optional metadata
        version: {
            added: "v1.0.0",
            updated: "January 2026"
        },
        
        // Related endpoints for navigation
        relatedEndpoints: [
            { method: 'GET', path: '/api/<category>/:id', description: 'Get single item' }
        ]
    }
];
```

### Step 4: Update Index File (If New Category)

**Add import:**
```typescript
import { <category>Endpoints } from './<category>Endpoints';
```

**Add to endpointData array:**
```typescript
export const endpointData: Endpoint[] = [
  // ... existing endpoints
  ...<category>Endpoints,
];
```

**Add re-export:**
```typescript
export * from './<category>Endpoints';
```

### Step 5: Update API Config (If New Category)

**Add to API_CATEGORIES:**
```typescript
export const API_CATEGORIES = {
  // ... existing categories
  <CATEGORY_KEY>: '<Category Display Name>',
} as const;
```

**Add to CATEGORY_ORDER:**
```typescript
export const CATEGORY_ORDER = [
  // ... existing order
  '<Category Display Name>',
] as const;
```

## Backend → Frontend Mapping

| Backend File | Frontend Location |
|--------------|-------------------|
| `server/routes/productRoutes.js` | `productEndpoints.ts` |
| `server/routes/orderRoutes.js` | `orderEndpoints.ts` |
| `server/routes/userRoutes.js` | `userEndpoints.ts` |
| `server/routes/authRoutes.js` | `authEndpoints.ts` |
| `server/routes/categoryRoutes.js` | `categoryEndpoints.ts` |
| `server/routes/cartRoutes.js` | `cartEndpoints.ts` |
| `server/routes/brandRoutes.js` | `brandEndpoints.ts` |
| `server/routes/bannerRoutes.js` | `bannerEndpoints.ts` |
| `server/routes/reviewRoutes.js` | `reviewEndpoints.ts` |
| `server/routes/questionRoutes.js` | `questionEndpoints.ts` |
| `server/routes/wishlistRoutes.js` | `wishlistEndpoints.ts` |
| `server/routes/inventoryRoutes.js` | `inventoryEndpoints.ts` |
| `server/routes/offerRoutes.js` | `offerEndpoints.ts` |
| `server/routes/blogPostRoutes.js` | `blogPostEndpoints.ts` |
| `server/routes/blogCategoryRoutes.js` | `blogEndpoints.ts` (blogCategoryEndpoints) |
| `server/routes/blogCommentRoutes.js` | `blogEndpoints.ts` (blogCommentEndpoints) |
| `server/routes/testimonialRoutes.js` | `contentEndpoints.ts` (testimonialEndpoints) |
| `server/routes/staticPageRoutes.js` | `contentEndpoints.ts` (staticPageEndpoints) |
| `server/routes/sizeChartRoutes.js` | `commerceEndpoints.ts` (sizeChartEndpoints) |
| `server/routes/shippingMethodRoutes.js` | `commerceEndpoints.ts` (shippingEndpoints) |
| `server/routes/settingsRoutes.js` | `settingsEndpoints.ts` |
| `server/routes/siteSettingsRoutes.js` | `settingsEndpoints.ts` (siteSettingsEndpoints) |
| `server/routes/seoRoutes.js` | `settingsEndpoints.ts` (seoEndpoints) |
| `server/routes/aiSeoRoutes.js` | `settingsEndpoints.ts` (aiSeoEndpoints) |
| `server/routes/analyticsRoutes.js` | `systemEndpoints.ts` (analyticsEndpoints) |
| `server/routes/sitemapRoutes.js` | `systemEndpoints.ts` (sitemapEndpoints) |
| `server/routes/search.js` | `systemEndpoints.ts` (searchEndpoints) |
| `server/routes/productOfferRoutes.js` | `systemEndpoints.ts` (productOfferEndpoints) |
| `server/routes/uploadRoutes.js` | `communicationEndpoints.ts` (uploadEndpoints) |
| `server/routes/emailTemplateRoutes.js` | `communicationEndpoints.ts` (emailTemplateEndpoints) |
| `server/routes/contactRoutes.js` | `communicationEndpoints.ts` (contactEndpoints) |
| `server/routes/newsletterRoutes.js` | `communicationEndpoints.ts` (newsletterEndpoints) |
| `server/routes/notificationRoutes.js` | `realtimeEndpoints.ts` (notificationEndpoints) |
| `server/routes/sseRoutes.js` | `realtimeEndpoints.ts` (sseEndpoints) |
| `server/routes/dbRoutes.js` | `realtimeEndpoints.ts` (databaseEndpoints) |
| `server/routes/systemRoutes.js` | `realtimeEndpoints.ts` (systemCoreEndpoints) |

## Verification Checklist

After updating frontend files, verify:

- [ ] Endpoint appears in API docs sidebar
- [ ] Endpoint details display correctly
- [ ] Method and path match backend route
- [ ] Required auth settings are correct
- [ ] Parameters/body/query documented
- [ ] Response examples are accurate
- [ ] Status codes are complete
- [ ] Category sorting is correct
- [ ] Related endpoints work

## Red Flags

**Never:**
- Create backend route without updating API docs
- Skip authentication requirements in docs
- Use wrong category name (must match `API_CATEGORIES`)
- Forget to add new file to `index.ts`

**Always:**
- Match exact path from backend route
- Include all parameters the backend accepts
- Document all possible status codes
- Test the API docs page after changes

## Quick Reference: Common Endpoint Types

### Public GET (List)
```typescript
{ method: 'GET', path: '/api/items', description: 'Get all items', requiresAuth: false, category: 'Items' }
```

### Public GET (Single)
```typescript
{ method: 'GET', path: '/api/items/:id', description: 'Get item by ID', requiresAuth: false, params: { id: { type: 'string', description: 'Item ID', required: true } } }
```

### Protected POST
```typescript
{ method: 'POST', path: '/api/items', description: 'Create item', requiresAuth: true, admin: true, roles: ['admin'], body: { name: { type: 'string', required: true } } }
```

### Protected PUT
```typescript
{ method: 'PUT', path: '/api/items/:id', description: 'Update item', requiresAuth: true, admin: true, params: { id: { type: 'string', required: true } } }
```

### Protected DELETE
```typescript
{ method: 'DELETE', path: '/api/items/:id', description: 'Delete item', requiresAuth: true, admin: true }
```

### Bulk Delete
```typescript
{ method: 'POST', path: '/api/items/bulk-delete', description: 'Bulk delete items', requiresAuth: true, admin: true, body: { ids: { type: 'array', required: true } } }
```

## Integration

**Pairs with:**
- **api-development** - Use this AFTER using api-development to create backend routes
- **verification-before-completion** - Verify docs work before marking complete

**Workflow:**
1. Use `api-development` skill to create backend route
2. Use `api-sync` skill to update frontend docs
3. Use `verification-before-completion` to verify everything works

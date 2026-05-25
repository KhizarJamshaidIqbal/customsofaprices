<?php
if (!defined('ADMIN')) { http_response_code(403); exit('Forbidden'); }

function e($s): string {
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}

function time_ago($ts): string {
    if (!$ts) return '-';
    $t = is_numeric($ts) ? (int)$ts : strtotime((string)$ts);
    if (!$t) return e((string)$ts);
    $d = time() - $t;
    if ($d < 60)    return $d . 's ago';
    if ($d < 3600)  return floor($d / 60) . 'm ago';
    if ($d < 86400) return floor($d / 3600) . 'h ago';
    return floor($d / 86400) . 'd ago';
}

function render_head(array $cfg, string $title, string $bodyClass = ''): void {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<title><?= e($title) ?> &middot; <?= e($cfg['site_name']) ?></title>
<link rel="icon" type="image/png" href="/images/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = { theme: { extend: {
  fontFamily: { display: ['"Playfair Display"','Georgia','serif'], body: ['Inter','system-ui','sans-serif'] },
  colors: {
    gold:     { DEFAULT:'#C9A96E', light:'#DFC9A0', dark:'#A68942' },
    charcoal: { DEFAULT:'#2D2D2D', light:'#4A4A4A', dark:'#1A1A1A' },
    cream:    { DEFAULT:'#FAFAF6', dark:'#F0EDE5' }
  }
}}};
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>body{font-family:Inter,system-ui,sans-serif}.font-display{font-family:'Playfair Display',Georgia,serif}</style>
</head>
<body class="<?= e($bodyClass) ?>">
<?php
}

function render_foot(): void {
    ?>
</body>
</html>
<?php
}

function render_flash(?array $flash): void {
    if (!$flash) return;
    $ok = ($flash['type'] ?? '') === 'success';
    $cls = $ok ? 'bg-green-50 border-green-200 text-green-800' : 'bg-red-50 border-red-200 text-red-700';
    $icon = $ok ? 'fa-circle-check' : 'fa-circle-exclamation';
    echo '<div class="flex items-start gap-3 ' . $cls . ' border rounded-xl px-4 py-3 text-sm mb-6"><i class="fas ' . $icon . ' mt-0.5"></i><span>' . e($flash['msg'] ?? '') . '</span></div>';
}

/* ===================== LOGIN ===================== */
function render_login(array $cfg, ?array $flash): void {
    render_head($cfg, 'Sign in');
    $csrf = csrf_token();
    ?>
<div class="min-h-screen flex items-center justify-center px-4 bg-gradient-to-br from-charcoal-dark via-charcoal to-charcoal-dark">
  <div class="w-full max-w-md">
    <div class="flex items-center justify-center gap-3 mb-8">
      <img src="/images/logo.png" alt="" class="w-12 h-12 rounded-xl">
      <div>
        <div class="font-display text-2xl font-bold text-white"><?= e($cfg['site_name']) ?></div>
        <div class="text-gold-light text-[11px] uppercase tracking-[0.2em]"><?= e($cfg['panel_name']) ?></div>
      </div>
    </div>
    <div class="bg-white rounded-2xl shadow-2xl p-8">
      <h1 class="font-display text-xl font-bold text-charcoal mb-1">Welcome back</h1>
      <p class="text-gray-400 text-sm mb-6">Sign in to manage your site.</p>
      <?php render_flash($flash); ?>
      <form method="post" action="" class="space-y-4">
        <input type="hidden" name="action" value="login">
        <input type="hidden" name="csrf" value="<?= e($csrf) ?>">
        <div>
          <label class="block text-xs font-semibold text-charcoal mb-1.5">Username</label>
          <input name="username" autocomplete="username" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/30 outline-none transition">
        </div>
        <div>
          <label class="block text-xs font-semibold text-charcoal mb-1.5">Password</label>
          <input name="password" type="password" autocomplete="current-password" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/30 outline-none transition">
        </div>
        <button class="w-full bg-gradient-to-r from-gold to-gold-dark text-white font-semibold py-3 rounded-xl shadow hover:shadow-lg hover:scale-[1.01] transition">Sign In</button>
      </form>
    </div>
    <p class="text-center text-white/30 text-xs mt-6">Protected area &middot; authorised access only</p>
  </div>
</div>
    <?php
    render_foot();
}

/* ===================== FIRST-RUN SETUP ===================== */
function render_setup(array $cfg, ?array $flash): void {
    render_head($cfg, 'First-time setup');
    $csrf = csrf_token();
    ?>
<div class="min-h-screen flex items-center justify-center px-4 py-10 bg-gradient-to-br from-charcoal-dark via-charcoal to-charcoal-dark">
  <div class="w-full max-w-md">
    <div class="text-center mb-6">
      <div class="font-display text-2xl font-bold text-white"><?= e($cfg['site_name']) ?></div>
      <div class="text-gold-light text-[11px] uppercase tracking-[0.2em]">Create admin account</div>
    </div>
    <div class="bg-white rounded-2xl shadow-2xl p-8">
      <h1 class="font-display text-xl font-bold text-charcoal mb-1">First-time setup</h1>
      <p class="text-gray-400 text-sm mb-6">Create your admin login. You will only see this screen once.</p>
      <?php render_flash($flash); ?>
      <form method="post" action="" class="space-y-4">
        <input type="hidden" name="action" value="setup">
        <input type="hidden" name="csrf" value="<?= e($csrf) ?>">
        <div>
          <label class="block text-xs font-semibold text-charcoal mb-1.5">Setup key</label>
          <input name="setup_key" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/30 outline-none transition">
          <p class="text-[11px] text-gray-400 mt-1">Found in <code>admin/inc/config.php</code> (the <code>setup_key</code> value).</p>
        </div>
        <div>
          <label class="block text-xs font-semibold text-charcoal mb-1.5">Choose a username</label>
          <input name="username" required minlength="3" autocomplete="username" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/30 outline-none transition">
        </div>
        <div>
          <label class="block text-xs font-semibold text-charcoal mb-1.5">Password <span class="text-gray-400 font-normal">(min 8 characters)</span></label>
          <input name="password" type="password" required minlength="8" autocomplete="new-password" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/30 outline-none transition">
        </div>
        <div>
          <label class="block text-xs font-semibold text-charcoal mb-1.5">Confirm password</label>
          <input name="password2" type="password" required minlength="8" autocomplete="new-password" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/30 outline-none transition">
        </div>
        <button class="w-full bg-gradient-to-r from-gold to-gold-dark text-white font-semibold py-3 rounded-xl shadow hover:shadow-lg transition">Create account &amp; sign in</button>
      </form>
    </div>
  </div>
</div>
    <?php
    render_foot();
}

/* ===================== DASHBOARD / DEPLOYMENT TAB ===================== */
function render_dashboard(array $cfg, ?array $flash, array $runs, array $log): void {
    render_head($cfg, 'Deployment', 'bg-cream');
    $csrf = csrf_token();
    $user = $_SESSION['user'] ?? 'admin';
    $configured = gh_configured();
    ?>
<div class="min-h-screen flex">
  <!-- Sidebar -->
  <aside class="hidden lg:flex flex-col w-64 bg-charcoal-dark text-white/80 fixed inset-y-0 left-0">
    <div class="flex items-center gap-3 px-6 h-16 border-b border-white/10">
      <img src="/images/logo.png" alt="" class="w-9 h-9 rounded-lg">
      <div>
        <div class="font-display font-bold text-white text-sm leading-tight"><?= e($cfg['site_name']) ?></div>
        <div class="text-gold-light text-[10px] uppercase tracking-[0.18em]"><?= e($cfg['panel_name']) ?></div>
      </div>
    </div>
    <nav class="flex-1 px-3 py-5 space-y-1">
      <a href="" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-gold/15 text-white font-medium text-sm">
        <i class="fas fa-rocket w-5 text-center text-gold"></i> Deployment
      </a>
      <span class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/30 text-sm cursor-not-allowed">
        <i class="fas fa-box w-5 text-center"></i> Products
        <span class="ml-auto text-[10px] bg-white/10 px-2 py-0.5 rounded-full">soon</span>
      </span>
      <span class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/30 text-sm cursor-not-allowed">
        <i class="fas fa-gear w-5 text-center"></i> Settings
        <span class="ml-auto text-[10px] bg-white/10 px-2 py-0.5 rounded-full">soon</span>
      </span>
    </nav>
    <div class="px-3 py-4 border-t border-white/10">
      <form method="post" action="">
        <input type="hidden" name="action" value="logout">
        <input type="hidden" name="csrf" value="<?= e($csrf) ?>">
        <button class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:bg-white/10 hover:text-white text-sm transition">
          <i class="fas fa-arrow-right-from-bracket w-5 text-center"></i> Sign out
        </button>
      </form>
    </div>
  </aside>

  <!-- Main -->
  <div class="flex-1 lg:ml-64 w-full">
    <header class="h-16 bg-white border-b border-gray-100 flex items-center justify-between px-5 lg:px-8 sticky top-0 z-10">
      <div class="flex items-center gap-3">
        <h1 class="font-display text-lg font-bold text-charcoal">Deployment</h1>
        <span class="hidden sm:inline-flex items-center gap-1.5 text-xs bg-cream-dark text-charcoal-light px-2.5 py-1 rounded-full"><i class="fas fa-code-branch text-gold text-[10px]"></i> <?= e($cfg['deploy_branch']) ?></span>
      </div>
      <div class="flex items-center gap-4">
        <a href="<?= e($cfg['live_url']) ?>" target="_blank" rel="noopener" class="text-sm text-charcoal-light hover:text-gold-dark transition hidden sm:inline-flex items-center gap-1.5"><i class="fas fa-up-right-from-square text-xs"></i> View live site</a>
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 rounded-full bg-gradient-to-br from-gold to-gold-dark text-white flex items-center justify-center text-xs font-bold"><?= e(strtoupper(substr($user, 0, 2))) ?></div>
          <span class="text-sm text-charcoal font-medium hidden sm:inline"><?= e($user) ?></span>
        </div>
        <form method="post" action="" class="lg:hidden">
          <input type="hidden" name="action" value="logout">
          <input type="hidden" name="csrf" value="<?= e($csrf) ?>">
          <button class="text-charcoal-light hover:text-red-500 p-2" title="Sign out"><i class="fas fa-arrow-right-from-bracket"></i></button>
        </form>
      </div>
    </header>

    <main class="p-5 lg:p-8 max-w-5xl">
      <?php render_flash($flash); ?>

      <!-- Status cards -->
      <div class="grid sm:grid-cols-3 gap-4 mb-6">
        <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
          <div class="text-gray-400 text-xs uppercase tracking-wider mb-1.5">Method</div>
          <div class="font-semibold text-charcoal flex items-center gap-2"><i class="fab fa-github text-gold-dark"></i> Auto-deploy on push</div>
        </div>
        <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
          <div class="text-gray-400 text-xs uppercase tracking-wider mb-1.5">Repository</div>
          <div class="font-semibold text-charcoal text-sm truncate"><?= e($cfg['github_owner'] . '/' . $cfg['github_repo']) ?></div>
        </div>
        <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
          <div class="text-gray-400 text-xs uppercase tracking-wider mb-1.5">Live server</div>
          <div class="font-semibold text-charcoal text-sm"><?= e($cfg['server_label']) ?></div>
        </div>
      </div>

      <!-- GitHub Auto Push + Deploy now -->
      <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm mb-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
          <div>
            <h2 class="font-display text-lg font-bold text-charcoal mb-1">GitHub Auto Push</h2>
            <p class="text-gray-500 text-sm max-w-xl">Every push to the <strong><?= e($cfg['deploy_branch']) ?></strong> branch is uploaded automatically to the live server. Use <strong>Deploy now</strong> to re-publish the latest code without making a new push.</p>
          </div>
          <form method="post" action="">
            <input type="hidden" name="action" value="deploy">
            <input type="hidden" name="csrf" value="<?= e($csrf) ?>">
            <button <?= $configured ? '' : 'disabled' ?> class="inline-flex items-center gap-2 bg-gradient-to-r from-gold to-gold-dark text-white font-semibold px-6 py-3 rounded-xl shadow hover:shadow-lg transition whitespace-nowrap <?= $configured ? '' : 'opacity-50 cursor-not-allowed' ?>">
              <i class="fas fa-rocket"></i> Deploy now
            </button>
          </form>
        </div>
        <?php if (!$configured): ?>
        <div class="mt-4 flex items-start gap-2 bg-amber-50 border border-amber-200 text-amber-800 rounded-xl px-4 py-3 text-sm">
          <i class="fas fa-circle-info mt-0.5"></i>
          <span>Connect a GitHub token below to see live deploy status and enable <strong>Deploy now</strong>. Auto-deploy on push keeps working either way.</span>
        </div>
        <?php endif; ?>
      </div>

      <!-- Recent deployments -->
      <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm mb-6">
        <h2 class="font-display text-lg font-bold text-charcoal mb-4">Recent deployments</h2>
        <?php if (!$configured): ?>
          <p class="text-gray-400 text-sm">Connect GitHub below to view recent deployment runs.</p>
        <?php elseif (empty($runs)): ?>
          <p class="text-gray-400 text-sm">No deployment runs found yet. Push to <?= e($cfg['deploy_branch']) ?> or click Deploy now.</p>
        <?php else: ?>
          <div class="divide-y divide-gray-50">
            <?php foreach ($runs as $run):
              $status = $run['status'] ?? '';
              $concl  = $run['conclusion'] ?? '';
              if ($concl === 'success')      { $dot = 'bg-green-500';            $label = 'Success';            $tc = 'text-green-600'; }
              elseif ($concl === 'failure')  { $dot = 'bg-red-500';              $label = 'Failed';             $tc = 'text-red-600'; }
              elseif ($concl === 'cancelled'){ $dot = 'bg-gray-400';             $label = 'Cancelled';          $tc = 'text-gray-500'; }
              elseif ($status === 'in_progress' || $status === 'queued') { $dot = 'bg-amber-400 animate-pulse'; $label = ucfirst(str_replace('_',' ',$status)); $tc = 'text-amber-600'; }
              else                           { $dot = 'bg-gray-300';             $label = ucfirst((string)($concl ?: $status ?: 'unknown')); $tc = 'text-gray-500'; }
              $title = $run['display_title'] ?? ($run['head_commit']['message'] ?? 'Deployment');
            ?>
            <div class="flex items-center gap-3 py-3">
              <span class="w-2.5 h-2.5 rounded-full <?= $dot ?> flex-shrink-0"></span>
              <div class="flex-1 min-w-0">
                <div class="text-sm font-medium text-charcoal truncate"><?= e($title) ?></div>
                <div class="text-xs text-gray-400"><?= e($run['event'] ?? '') ?> &middot; <?= time_ago($run['created_at'] ?? '') ?></div>
              </div>
              <span class="text-xs font-semibold <?= $tc ?> whitespace-nowrap"><?= e($label) ?></span>
              <?php if (!empty($run['html_url'])): ?>
                <a href="<?= e($run['html_url']) ?>" target="_blank" rel="noopener" class="text-gray-300 hover:text-gold-dark"><i class="fas fa-up-right-from-square text-xs"></i></a>
              <?php endif; ?>
            </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- GitHub connection -->
      <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm">
        <h2 class="font-display text-lg font-bold text-charcoal mb-1">GitHub connection</h2>
        <p class="text-gray-500 text-sm mb-4">
          Paste a GitHub <strong>fine-grained token</strong> (repository <code><?= e($cfg['github_repo']) ?></code>, permission <em>Actions: Read and write</em>) to enable live status and one-click deploys.
          <?php if ($configured): ?><span class="text-green-600 font-medium"><i class="fas fa-circle-check"></i> Connected</span><?php endif; ?>
        </p>
        <form method="post" action="" class="flex flex-col sm:flex-row gap-3">
          <input type="hidden" name="action" value="save_token">
          <input type="hidden" name="csrf" value="<?= e($csrf) ?>">
          <input name="github_token" type="password" autocomplete="off" placeholder="<?= $configured ? 'Saved - paste a new token to replace, or leave empty + Save to remove' : 'github_pat_...' ?>" class="flex-1 px-4 py-2.5 rounded-xl border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/30 outline-none transition text-sm">
          <button class="bg-charcoal hover:bg-charcoal-dark text-white font-semibold px-5 py-2.5 rounded-xl transition text-sm whitespace-nowrap">Save token</button>
        </form>
        <p class="text-[11px] text-gray-400 mt-2"><i class="fas fa-lock"></i> Stored only on your server in a protected file. Never committed to GitHub.</p>
      </div>
    </main>
  </div>
</div>
    <?php
    render_foot();
}

<?php
// Non-secret configuration for the admin panel. Safe to commit to the repo.
// Real secrets (admin password hash + optional GitHub token) are created at
// runtime on the server and stored in admin/data/, which is never committed.

return [
    'site_name'   => 'Custom Sofa Prices',
    'panel_name'  => 'Admin Panel',

    // GitHub repository that powers the live site (used by the Deployment tab).
    'github_owner'  => 'KhizarJamshaidIqbal',
    'github_repo'   => 'customsofaprices',
    'workflow_file' => 'deploy.yml',
    'deploy_branch' => 'main',

    // Live site + hosting info shown in the Deployment tab.
    'live_url'     => 'https://cutomsofaprices.com',
    'server_label' => 'Hostinger - server683 - Asia (India)',

    // One-time setup gate: enter this key the first time you create the admin
    // account so nobody else can claim it. Change it to any value you like.
    'setup_key' => 's7K2-pQ9w-Rf4M-Zx1V',

    // Security tuning.
    'max_login_attempts'   => 5,
    'lockout_minutes'      => 15,
    'session_idle_minutes' => 60,
];

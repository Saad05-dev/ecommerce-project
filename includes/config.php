<?php
// General app config (non-sensitive)
define('SITE_NAME', 'My Store');
define('SITE_URL', 'http://localhost/yourproject');
define('ADMIN_EMAIL', 'admin@example.com');

// File paths
define('UPLOAD_PATH', __DIR__ . '/../uploads/');
define('MAX_UPLOAD_SIZE', 5 * 1024 * 1024); // 5MB

// Load local config if exists (for sensitive stuff)
if (file_exists(__DIR__ . '/config.local.php')) {
    require_once __DIR__ . '/config.local.php';
}
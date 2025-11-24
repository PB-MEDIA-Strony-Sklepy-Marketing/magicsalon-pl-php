<?php
/**
 * config.php - Zoptymalizowana konfiguracja MAGIC SALON
 * Wersja: 3.0 - Naprawiono wszystkie błędy Permissions-Policy
 */

// Buforowanie outputu
ob_start();

// Environment
define('APP_ENV', $_ENV['APP_ENV'] ?? 'development');

// Raportowanie błędów
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
} else {
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_WARNING);
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
    
    $logDir = __DIR__ . DIRECTORY_SEPARATOR . 'logs';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
    }
    ini_set('error_log', $logDir . DIRECTORY_SEPARATOR . 'php-errors.log');
}

// Schemat i host
define('SITE_SCHEME', (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http');
define('SITE_HOST', $_SERVER['HTTP_HOST'] ?? 'localhost');

// Ścieżka bazowa
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$scriptDir = dirname($scriptName);
$scriptDir = str_replace('\\', '/', $scriptDir);
$scriptDir = rtrim($scriptDir, '/');
define('BASE_PATH', ($scriptDir === '/' || $scriptDir === '') ? '' : $scriptDir);

// URLs
define('BASE_URL', SITE_SCHEME . '://' . SITE_HOST . BASE_PATH);
define('ASSETS_URL', BASE_URL . '/assets');

// Ścieżki systemowe
define('ROOT_PATH', __DIR__);
define('PARTIALS_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'partials');
define('TEMPLATE_PARTS_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'template-parts');

// Timezone
date_default_timezone_set('Europe/Warsaw');

// Session
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    @ini_set('session.cookie_httponly', '1');
    @ini_set('session.cookie_secure', SITE_SCHEME === 'https' ? '1' : '0');
    @ini_set('session.cookie_samesite', 'Lax');
    @ini_set('session.use_strict_mode', '1');
}

// Helper functions
if (!function_exists('asset')) {
    function asset($path) {
        return BASE_URL . '/' . ltrim($path, '/');
    }
}

if (!function_exists('e')) {
    function e($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('get_current_url')) {
    function get_current_url() {
        return SITE_SCHEME . '://' . SITE_HOST . ($_SERVER['REQUEST_URI'] ?? '');
    }
}

// Security Headers - TYLKO DLA LOKALNEGO SERWERA PHP
if (!headers_sent()) {
    // Podstawowe nagłówki bezpieczeństwa
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    
    // Uproszczona Permissions-Policy - używamy tylko obsługiwanych funkcji
    // Pomijamy nieobsługiwane funkcje które powodują błędy
    $permissionsPolicy = [
        'geolocation=(self "https://magicsalon28.booksy.com" "https://booksy.com")',
        'camera=(self "https://magicsalon28.booksy.com")',
        'microphone=(self "https://magicsalon28.booksy.com")',
        'payment=(self "https://magicsalon28.booksy.com" "https://booksy.com")',
        'fullscreen=(self "https://magicsalon28.booksy.com")',
        'accelerometer=()',
        'gyroscope=()',
        'magnetometer=()',
        'midi=()',
        'usb=()'
    ];
    
    header('Permissions-Policy: ' . implode(', ', $permissionsPolicy));
    
    // Content Security Policy dla development
    if (APP_ENV === 'development') {
        // Bardziej liberalna polityka dla środowiska deweloperskiego
        $csp = [
            "default-src 'self' http://localhost:* https://*.booksy.com",
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://*.facebook.net https://*.google.com https://*.googleapis.com https://*.gstatic.com https://*.googletagmanager.com https://cdn.lightwidget.com https://*.booksy.com http://localhost:*",
            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://*.booksy.com",
            "img-src 'self' data: https: http://localhost:*",
            "font-src 'self' data: https://fonts.gstatic.com",
            "connect-src 'self' https://*.facebook.com https://*.google-analytics.com https://*.googletagmanager.com https://*.booksy.com http://localhost:*",
            "frame-src 'self' https://*.booksy.com https://*.facebook.com https://www.google.com https://cdn.lightwidget.com",
            "object-src 'none'",
            "base-uri 'self'",
            "form-action 'self' https://*.booksy.com"
        ];
        
        header('Content-Security-Policy: ' . implode('; ', $csp));
    }
    
    // Cache control
    if (APP_ENV === 'production') {
        header('Cache-Control: public, max-age=3600');
    } else {
        header('Cache-Control: no-cache, no-store, must-revalidate');
        header('Pragma: no-cache');
        header('Expires: 0');
    }
}

// Autoload helpers
$helpersFile = __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php';
if (file_exists($helpersFile)) {
    require_once $helpersFile;
}
?>
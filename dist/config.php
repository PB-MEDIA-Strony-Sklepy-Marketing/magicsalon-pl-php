<?php

/**
 * config.php - Zoptymalizowana konfiguracja MAGIC SALON
 * Wersja: 2.1 - Naprawiono wszystkie błędy
 * UWAGA: Zapisz ten plik jako UTF-8 BEZ BOM!
 */

// WAŻNE: Buforowanie outputu - zatrzymuje automatyczne wysyłanie headerów
ob_start();

// Environment
define('APP_ENV', $_ENV['APP_ENV'] ?? 'production');

// Raportowanie błędów - POPRAWIONA WERSJA dla PHP 8.4+
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
} else {
    // Usunięto E_STRICT (deprecated w PHP 8.4+)
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_WARNING);
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');

    // Stwórz katalog logs jeśli nie istnieje
    $logDir = __DIR__ . DIRECTORY_SEPARATOR . 'logs';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
    }
    ini_set('error_log', $logDir . DIRECTORY_SEPARATOR . 'php-errors.log');
}

// Schemat i host
define('SITE_SCHEME', (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http');
define('SITE_HOST', $_SERVER['HTTP_HOST'] ?? 'localhost');

// Ścieżka bazowa aplikacji - POPRAWIONA
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$scriptDir = dirname($scriptName);
$scriptDir = str_replace('\\', '/', $scriptDir); // Normalizacja ścieżki
$scriptDir = rtrim($scriptDir, '/');
define('BASE_PATH', ($scriptDir === '/' || $scriptDir === '') ? '' : $scriptDir);

// URL bazowy (bez końcowego '/')
define('BASE_URL', SITE_SCHEME . '://' . SITE_HOST . BASE_PATH);

// URL do zasobów statycznych
define('ASSETS_URL', BASE_URL . '/assets');

// Ścieżki systemowe - POPRAWIONA WERSJA z DIRECTORY_SEPARATOR
define('ROOT_PATH', __DIR__);
define('PARTIALS_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'partials');

// Timezone
date_default_timezone_set('Europe/Warsaw');

// Session - TYLKO jeśli headery nie zostały wysłane
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    @ini_set('session.cookie_httponly', '1');
    @ini_set('session.cookie_secure', SITE_SCHEME === 'https' ? '1' : '0');
    @ini_set('session.cookie_samesite', 'Lax');
    @ini_set('session.use_strict_mode', '1');
    // session_start(); // Odkomentuj jeśli używasz sesji
}

// Autoload helpers jeśli istnieje
$helpersFile = __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php';
if (file_exists($helpersFile)) {
    require_once $helpersFile;
}

// Security Headers - TYLKO jeśli headery nie zostały wysłane
if (!headers_sent()) {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');

    // Cache control dla HTML
    if (APP_ENV === 'production') {
        header('Cache-Control: public, max-age=3600');
    } else {
        header('Cache-Control: no-cache, no-store, must-revalidate');
        header('Pragma: no-cache');
        header('Expires: 0');
    }
}
<?php
// Fix for Revolution Slider PHP errors
// Place this file in the same directory as your main index.php

// Increase PHP memory limit
ini_set('memory_limit', '256M');

// Increase max execution time
ini_set('max_execution_time', 300);

// Enable error reporting for development (disable for production)
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Fix for Revolution Slider include paths
define('RS_PLUGIN_PATH', dirname(__FILE__) . '/plugins/revolution/');
define('RS_PLUGIN_URL', 'plugins/revolution/');
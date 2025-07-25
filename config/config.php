<?php
// Site Configuration
define('SITE_NAME', 'Incinta Fertility Center');
define('SITE_TAGLINE', 'Science * ART * Life');
define('SITE_URL', 'https://jp.to4.cn');
define('SITE_EMAIL', 'contact@incintafertility.com');
define('SITE_PHONE', '+1 (424) 212-4087');

// Paths
define('ROOT_PATH', dirname(__DIR__));
define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('TEMPLATES_PATH', ROOT_PATH . '/templates');
define('ASSETS_PATH', ROOT_PATH . '/assets');

// Database
define('DB_PATH', ROOT_PATH . '/database/incinta_fertility.db');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
session_start();

// Include database class
require_once __DIR__ . '/database.php';
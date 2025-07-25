<?php
require_once 'config/config.php';
require_once 'includes/functions.php';

$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$path = parse_url($uri, PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));

// Route handling
$page = isset($segments[0]) ? $segments[0] : 'home';

switch ($page) {
    case '':
    case 'home':
        include 'pages/home.php';
        break;
    case 'team':
        include 'pages/team.php';
        break;
    case 'our-difference':
        include 'pages/our-difference.php';
        break;
    case 'services':
        if (isset($segments[1])) {
            include 'pages/service-detail.php';
        } else {
            include 'pages/services.php';
        }
        break;
    case 'resources':
        include 'pages/resources.php';
        break;
    case 'financing':
        include 'pages/financing.php';
        break;
    case 'about':
        include 'pages/about.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
    case 'locations':
        include 'pages/locations.php';
        break;
    case 'privacy':
        include 'pages/privacy.php';
        break;
    case 'terms':
        include 'pages/terms.php';
        break;
    default:
        http_response_code(404);
        include 'pages/404.php';
        break;
}
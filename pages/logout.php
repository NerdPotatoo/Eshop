<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\AdminAuthController;
use App\Controllers\UserAuthController;
// Handle admin logout
if (isset($_GET['logout']) && $_GET['logout'] == 'admin') {
    $authController = new AdminAuthController();
    $authController->logout();
    header('Location: ?page=admin/login');
    exit();
}

// Handle user logout
if (isset($_GET['logout']) && $_GET['logout'] == 'user') {
    $authController = new UserAuthController();
    $authController->logout();
    header('Location: ?page=home');
    exit();
}

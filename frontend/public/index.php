<?php
// index.php - Main entry point for routing
require_once '../app/config/app.php';  // Load app configuration

// Routing logic
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/login':
        require_once '../app/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->showLogin();
        break;
    case '/register':
        require_once '../app/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->showRegister();
        break;
    case '/home':
        require_once '../app/controllers/ProductController.php';
        $controller = new ProductController();
        $controller->showHome();
        break;
    default:
        require_once '../app/controllers/ProductController.php';
        $controller = new ProductController();
        $controller->showHome();
        break;
}
?>

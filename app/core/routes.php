<?php
    require_once 'Router.php';
    $router = new Router();
    
    // Home routes
    $router->add('', ['controller' => 'HomeController', 'method' => 'index']);
    $router->add('index', ['controller' => 'HomeController', 'method' => 'index']);

    // Login and Logout routes
    $router->add('login', ['controller' => 'AuthController', 'method' => isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' ? 'login' : 'loginForm']);
    $router->add('logout', ['controller' => 'AuthController', 'method' => 'logout']);

    // Admin dashboard routes
    $router->add('adminDashboard', ['controller' => 'AdminDashboardController', 'method' => isset($_SESSION['user']) ? 'dashboard' : 'loginUnable']);

    // Admin Products routes
    $router->add('adminProducts', ['controller' => 'AdminProductsController', 'method' => isset($_SESSION['user']) ? 'index' : 'loginUnable']);
    $router->add('addProducts', ['controller' => 'AdminProductsController', 'method' => isset($_SESSION['user']) ? 'addProductForm' : 'loginUnable']);

    // Admin Suppliers routes
    $router->add('adminSuppliers', ['controller' => 'AdminSupplierController', 'method' => isset($_SESSION['user']) ? 'index' : 'loginUnable']);  
    $router->add('addSuppliers', ['controller' => 'AdminSupplierController', 'method' => isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' ? 'addSupplier' : 'addSupplierForm']);

    // Admin Users routes
    $router->add('adminUsers', ['controller' => 'AdminUserController', 'method' => isset($_SESSION['user']) ? 'index' : 'loginUnable']);
    $router->add('addUsers', ['controller' => 'AdminUserController', 'method' => isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' ? 'addUser' : 'addUserForm']);
    $router->add('deleteUser', ['controller' => 'AdminUserController', 'method' => isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET' ? 'deleteUser' : 'index']);
    $router->add('adminUsers', ['controller' => 'AdminUserController', 'method' => isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' ? 'updateUser' : 'index']);

    
?>
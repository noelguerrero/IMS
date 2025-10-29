<?php
    require __DIR__ . '/../app/core/session.php';
    require __DIR__ . '/../app/core/classAutoloader.php';
    require __DIR__ . '/../app/core/routes.php';
    require_once __DIR__ . '/../app/core/config.php';
    
    $router->dispatch();
?>
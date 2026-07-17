<?php

require_once __DIR__ . '/config/database.php';

$controllerName = $_GET['controller'] ?? 'index';
$action = $_GET['action'] ?? 'index';

$connection = Database::getConnection();

switch ($controllerName) {
    case 'index':
        require_once __DIR__ . '/controllers/IndexController.php';
        $controller = new IndexController($connection);
        break;

    case 'cursos':
        require_once __DIR__ . '/controllers/CursosController.php';
        $controller = new CursosController($connection);
        break;

    default:
        http_response_code(404);
        exit;
}

$controller->$action();
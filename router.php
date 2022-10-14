<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
//define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');
//define('LOGOUT', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/logout');

require_once 'app/Controller/AuthController.php';
require_once "app/Controller/Controller.php";
require_once "app/View/IndexView.php";

$authController = new AuthController;
$controller = new Controller();
$index_view = new IndexView();

//recibir/leer la accion
if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'index';
}

// parseo el string de action por "/" y me devuelve el arreglo
$params = explode('/', $accion);

//
switch ($params[0]) {
    case "index":
        $controller->IndexView();
        break;
    case "login":
        $authController->showFormLogin();
        break;
    case "validate":
        $authController->validateUser();
        /*if (isset($params[1]) && $params[1] == "post_category") {
            $controller->PostCategory();
        } elseif (isset($params[1]) && $params[1] == "post_product") {
            $controller->PostProduct();
        } */
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'admin':
        $controller->showAdminView();
    default:
        $controller->error();
        break;
}


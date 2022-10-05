<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once "app/Controller/Controller.php";
require_once "app/View/AdminView.php";
$controller = new Controller();
$admin_view = new AdminView();

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
        echo("index");
        break;
    case "admin":
        if (isset($params[1]) && $params[1] == "post_category") {
            $controller->PostCategory();
        }
        $controller->AdminView();
        break;
    default:
        $controller -> error();
        break;
}
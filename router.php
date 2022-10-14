<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once "app/Controller/CategoriesController.php";
require_once "app/Controller/ProductsController.php";
require_once "app/View/AdminView.php";
require_once "app/View/ErrorView.php";
$categories_controller = new CategoriesController();
$products_controller = new ProductsController();
$admin_view = new AdminView();
$error_view = new ErrorView();

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
        echo ("index");
        break;
    case "categories":
        if (isset($params[1]) && $params[1] == "post") {
            $categories_controller->PostCategory();
        } else {
            $categories_controller->ShowCategories();
        }
        break;
    case "products":
        if (isset($params[1]) && $params[1] == "post") {
            $products_controller->PostProduct();
        } else {
            $products_controller->ShowProducts();
        }
        break;
    default:
        $error_view->Error404($accion);
        break;
}

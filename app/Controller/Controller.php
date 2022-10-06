<?php

require_once("app/Model/ModelCategories.php");
require_once("app/Model/ModelProducts.php");
require_once("app/View/AdminView.php");

class Controller
{

    private $smarty;
    private $modelCategories;
    private $modelProducts;
    private $adminView;
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign("BASE_URL", BASE_URL);

        $this->modelCategories = new ModelCategories();
        $this->modelProducts = new ModelProducts();
        $this->adminView = new AdminView();
    }

    function error()
    {
        http_response_code(404);
        $this->smarty->display("app/web/template/error.tpl");
    }

    public function AdminView()
    {
        $products = $this->modelProducts->GetProducts();
        $categories = $this->modelCategories->GetCategories();
        $this->adminView->MainView($products, $categories);
    }

    public function PostCategory()
    {
        if (
            isset($_POST["type"])  && isset($_POST["brand"]) &&
            strlen($_POST["type"]) != 0 && strlen($_POST["type"]) <= 100 &&
            strlen($_POST["brand"]) != 0 && strlen($_POST["brand"]) <= 100
        ) {
            $this->modelCategories->PostCategory($_POST["type"], $_POST["brand"]);
            header("Location: /admin");
        } else {
            http_response_code(400);
        }
        exit();
    }

    public function PostProduct()
    {
        if (
            isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["stock"]) && isset($_POST["category"]) &&
            strlen($_POST["name"]) != 0 && strlen($_POST["name"]) <= 200 &&
            strlen($_POST["description"]) != 0 && strlen($_POST["description"]) <= 999999999 &&
            is_numeric($_POST["price"]) && floatval($_POST["price"]) >= 0 && floatval($_POST["price"]) <=99999999.99 &&
            is_numeric($_POST["stock"]) && intval($_POST["stock"]) >= 0 && intval($_POST["stock"]) <= 2147483647 &&
            is_numeric($_POST["category"]) && $this->modelCategories->GetCategoryById($_POST["category"]) != false
        ) {    
            $this->modelProducts->PostProduct($_POST["name"], $_POST["description"], $_POST["price"], $_POST["stock"], $_POST["category"]);
            header("Location: /admin");
        } else {
            http_response_code(400);
        }
        exit();
    }
}

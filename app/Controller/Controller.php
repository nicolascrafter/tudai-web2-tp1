<?php

require_once("app/Model/ModelCategories.php");
require_once("app/Model/ModelProducts.php");
require_once("app/View/AdminView.php");

class Controller {

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

    function error() {
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
        var_dump(isset($_POST["type"]) && isset($_POST["brand"]));
        if (isset($_POST["type"]) && isset($_POST["brand"])) {
            $this->modelCategories->PostCategory($_POST["type"], $_POST["brand"]);
            echo("what");
            header("Location: /admin");
        } else {
            http_response_code(400);
        }
        exit;
    }
}
<?php
require_once "app/Model/ProductsModel.php";
require_once "app/Model/CategoriesModel.php";
require_once "app/View/ProductsView.php";
class ProductsController {
    private $modelProducts;
    private $modelCategories;
    private $viewProducts;

    public function __construct()
    {
        $this->modelProducts = new ProductsModel();
        $this->modelCategories = new CategoriesModel();
        $this->viewProducts = new ProductsView();
    }

    public function ShowProducts()
    {
        $products = $this->modelProducts->GetProducts();
        $categories = $this->modelCategories->GetCategories();
        $this->viewProducts->ShowProducts($products, $categories); 
    }

    public function PostProduct()
    {
        if (
            isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["stock"]) && isset($_POST["category"]) &&
            strlen($_POST["name"]) != 0 && strlen($_POST["name"]) <= 200 &&
            strlen($_POST["description"]) != 0 && strlen($_POST["description"]) <= 999999999 &&
            is_numeric($_POST["price"]) && floatval($_POST["price"]) >= 0 && floatval($_POST["price"]) <=99999999.99 &&
            is_numeric($_POST["stock"]) && intval($_POST["stock"]) >= 0 && intval($_POST["stock"]) <= 999999999 &&
            is_numeric($_POST["category"]) && $this->modelCategories->GetCategoryById($_POST["category"]) != false
        ) {    
            $this->modelProducts->PostProduct(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["description"]), strval(floatval($_POST["price"])), strval(intval($_POST["stock"])), strval(intval($_POST["category"])));
            header("Location: /admin");
        } else {
            http_response_code(400);
        }
        exit();
    }
}
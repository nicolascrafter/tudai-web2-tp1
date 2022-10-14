<?php
require_once "app/Model/ProductsModel.php";
require_once "app/Model/CategoriesModel.php";
require_once "app/View/ProductsView.php";
class ProductsController {
    private $modelProducts;
    private $modelCategories;
    private $viewProducts;
    private $errorView;

    public function __construct()
    {
        $this->modelProducts = new ProductsModel();
        $this->modelCategories = new CategoriesModel();
        $this->viewProducts = new ProductsView();
        $this->errorView = new ErrorView();
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
            strlen($_POST["name"]) !== 0 && strlen($_POST["name"]) <= 200 &&
            strlen($_POST["description"]) !== 0 && strlen($_POST["description"]) <= 999999999 &&
            is_numeric($_POST["price"]) && floatval($_POST["price"]) >= 0 && floatval($_POST["price"]) <=99999999.99 &&
            is_numeric($_POST["stock"]) && intval($_POST["stock"]) >= 0 && intval($_POST["stock"]) <= 999999999 &&
            is_numeric($_POST["category"]) && $this->modelCategories->GetCategoryById($_POST["category"]) != false
        ) {    
            $this->modelProducts->PostProduct(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["description"]), strval(floatval($_POST["price"])), strval(intval($_POST["stock"])), strval(intval($_POST["category"])));
            header("Location: /products");
        } else {
            $this->errorView->Error400();
        }
        exit();
    }

    public function ModifyProduct()
    {
        if (
            isset($_POST["id"]) && !empty($_POST["id"]) && is_numeric($_POST["id"]) &&
            $this->modelProducts->GetProductById(strval(intval($_POST["id"]))) !== false &&
            isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["stock"]) && isset($_POST["category"]) &&
            strlen($_POST["name"]) !== 0 && strlen($_POST["name"]) <= 200 &&
            strlen($_POST["description"]) !== 0 && strlen($_POST["description"]) <= 999999999 &&
            is_numeric($_POST["price"]) && floatval($_POST["price"]) >= 0 && floatval($_POST["price"]) <=99999999.99 &&
            is_numeric($_POST["stock"]) && intval($_POST["stock"]) >= 0 && intval($_POST["stock"]) <= 999999999 &&
            is_numeric($_POST["category"]) && $this->modelCategories->GetCategoryById(intval($_POST["category"])) !== false
        ) {    
            $this->modelProducts->ModifyProduct(strval(intval($_POST["id"])), htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["description"]), strval(floatval($_POST["price"])), strval(intval($_POST["stock"])), strval(intval($_POST["category"])));
            header("Location: /products");
        } else {
            $this->errorView->Error400();
        }
        exit();
    }

    public function DeleteProduct()
    {
        if (
            isset($_POST["id"]) && !empty($_POST["id"]) && is_numeric($_POST["id"]) &&
            $this->modelProducts->GetProductById(strval(intval($_POST["id"]))) !== false
        ) {
            $this->modelProducts->DeleteProduct(strval(intval($_POST["id"])));
            header("Location: /products");
        } else {
            $this->errorView->Error400();
        };
        exit();
    }
}
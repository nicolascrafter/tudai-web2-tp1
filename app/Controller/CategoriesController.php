<?php
require_once "app/Model/CategoriesModel.php";
require_once "app/View/CategoriesView.php";
require_once "app/View/ErrorView.php";
require_once "app/Helpers/AuthHelper.php";
class CategoriesController
{
    private $modelCategories;
    private $modelProducts;
    private $viewCategories;
    private $errorView;
    private $authHelper;
    public function __construct()
    {
        $this->modelCategories = new CategoriesModel();
        $this->modelProducts = new ProductsModel();
        $this->viewCategories = new CategoriesView();
        $this->errorView = new ErrorView();
        $this->authHelper = new AuthHelper();
    }

    public function ShowCategories()
    {
        $categories = $this->modelCategories->GetCategories();

        foreach ($categories as $category) {
            if (count($this->modelProducts->GetProductsByCategory($category->id)) > 0) {
                $category->can_delete = false;
            } else {
                $category->can_delete = true;
            }
        }

        $this->viewCategories->ShowCategories($categories);
    }

    public function ShowProductsByCategory($id)
    {
        if (!empty($id) && is_numeric($id) && $this->modelCategories->GetCategoryById(strval(intval($id))) !== false) {
            $category = $this->modelCategories->GetCategoryById(strval(intval($id)));
            $products = $this->modelProducts->GetProductsByCategory(strval(intval($id)));
            foreach ($products as $product) {
                $product->description_table = implode("<br>",preg_split("/\r\n|\n|\r/", $product->description));
            }
            $this->viewCategories->ShowProductsByCategory($category, $products);
        } else {
            $this->errorView->Error404("categories/view/".$id);
        }
    }

    public function PostCategory()
    {
        $this->authHelper->checkLogged();
        if (
            isset($_POST["type"])  && isset($_POST["brand"]) &&
            strlen($_POST["type"]) !== 0 && strlen($_POST["type"]) <= 100 &&
            strlen($_POST["brand"]) !== 0 && strlen($_POST["brand"]) <= 100
        ) {
            $this->modelCategories->PostCategory(htmlspecialchars($_POST["type"]), htmlspecialchars($_POST["brand"]));
            header("Location: ".BASE_URL."/categories/view");
        } else {
            $this->errorView->Error400();
        }
        exit();
    }

    public function ModifyCategory()
    {
        $this->authHelper->checkLogged();
        if (
            isset($_POST["id"]) && !empty($_POST["id"]) && is_numeric($_POST["id"]) &&
            isset($_POST["type"])  && isset($_POST["brand"]) &&
            $this->modelCategories->GetCategoryById(strval(intval($_POST["id"]))) !== false &&
            strlen($_POST["type"]) !== 0 && strlen($_POST["type"]) <= 100 &&
            strlen($_POST["brand"]) !== 0 && strlen($_POST["brand"]) <= 100
        ) {
            $this->modelCategories->ModifyCategory(strval(intval($_POST["id"])), htmlspecialchars($_POST["type"]), htmlspecialchars($_POST["brand"]));
            header("Location: ".BASE_URL."/categories/view");
        } else {
            $this->errorView->Error400();
        }
        exit();
    }

    public function DeleteCategory()
    {
        $this->authHelper->checkLogged();
        if (
            isset($_POST["id"]) && !empty($_POST["id"]) && is_numeric($_POST["id"]) &&
            $this->modelCategories->GetCategoryById(intval($_POST["id"])) !== false && count($this->modelProducts->GetProductsByCategory(intval($_POST["id"]))) === 0
        ) {
            $this->modelCategories->DeleteCategory(intval($_POST["id"]));
            header("Location: ".BASE_URL."/categories/view");
        } else {
            $this->errorView->Error400();
        };
        exit();
    }
}

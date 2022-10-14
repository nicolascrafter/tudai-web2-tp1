<?php
require_once "app/Model/CategoriesModel.php";
require_once "app/View/CategoriesView.php";
class CategoriesController
{
    private $modelCategories;
    private $viewCategories;
    public function __construct()
    {
        $this->modelCategories = new CategoriesModel();
        $this->viewCategories = new CategoriesView();
    }

    public function ShowCategories()
    {
        $categories = $this->modelCategories->GetCategories();
        $this->viewCategories->ShowCategories($categories);
    }

    public function PostCategory()
    {
        if (
            isset($_POST["type"])  && isset($_POST["brand"]) &&
            strlen($_POST["type"]) != 0 && strlen($_POST["type"]) <= 100 &&
            strlen($_POST["brand"]) != 0 && strlen($_POST["brand"]) <= 100
        ) {
            $this->modelCategories->PostCategory(htmlspecialchars($_POST["type"]), htmlspecialchars($_POST["brand"]));
            header("Location: /admin");
        } else {
            http_response_code(400);
        }
        exit();
    }
}

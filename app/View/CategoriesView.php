<?php
require_once "libs/smarty/Smarty.class.php";
class CategoriesView {
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign("BASE_URL", BASE_URL);
    }

    public function ShowCategories($categories)
    {
        session_start();
        if (isset($_SESSION["IS_LOGGED"])) {
            $this->smarty->assign("admin", true);
        } else {
            $this->smarty->assign("admin", false);
        }
        $this->smarty->assign("categories", $categories);
        $this->smarty->display("app/web/template/categories_page.tpl");
    }

    public function ShowProductsByCategory($category, $products)
    {
        session_start();
        if (isset($_SESSION["IS_LOGGED"])) {
            $this->smarty->assign("admin", true);
        } else {
            $this->smarty->assign("admin", false);
        }
        $this->smarty->assign("category", $category);
        $this->smarty->assign("products", $products);
        $this->smarty->display("app/web/template/category.tpl");
    }
}
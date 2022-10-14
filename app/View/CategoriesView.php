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
        $this->smarty->assign("admin", true);
        $this->smarty->assign("categories", $categories);
        $this->smarty->display("app/web/template/categories_page.tpl");
    }
}
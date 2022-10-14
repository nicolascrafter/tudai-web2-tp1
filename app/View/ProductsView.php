<?php
require_once "libs/smarty/Smarty.class.php";
class ProductsView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign("BASE_URL", BASE_URL);
    }
    
    public function ShowProducts($products, $categories)
    {
        $this->smarty->assign("admin", true);
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categories", $categories);
        $this->smarty->display("app/web/template/products_page.tpl");
    }
}
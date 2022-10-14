<?php
require_once "libs/smarty/Smarty.class.php";
class IndexView {
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign("BASE_URL", BASE_URL);
    }

    function IndexView($products, $categories) {
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categories", $categories);
        $this->smarty->display("app/web/template/index.tpl");
    }
}
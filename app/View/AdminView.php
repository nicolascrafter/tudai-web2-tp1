<?php
require_once "libs/smarty/Smarty.class.php";
class AdminView {
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign("BASE_URL", BASE_URL);
    }

    function MainView($products) {
        $this->smarty->display("app/web/template/admin.tpl");
    }
}
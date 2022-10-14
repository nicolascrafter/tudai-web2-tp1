<?php
require_once './libs/smarty/Smarty.class.php';

class AuthView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showFormLogin($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->display("app/web/template/login_form.tpl");
    }

    function showAuthView($products, $categories) {
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categories", $categories);
        $this->smarty->display("app/web/template/admin.tpl");
    }
}
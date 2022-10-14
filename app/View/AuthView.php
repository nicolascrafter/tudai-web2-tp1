<?php
require_once './libs/smarty/Smarty.class.php';

class AuthView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign("BASE_URL", BASE_URL);
    }

    function showFormLogin($error = null) {
        session_start();
        if (isset($_SESSION["IS_LOGGED"])) {
            $this->smarty->assign("admin", true);
        } else {
            $this->smarty->assign("admin", false);
        }
        $this->smarty->assign("error", $error);
        $this->smarty->assign("title", "Login");
        $this->smarty->display("app/web/template/login_form.tpl");
    }
}
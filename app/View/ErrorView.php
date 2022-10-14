<?php
require_once "libs/smarty/Smarty.class.php";
class ErrorView {
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign("BASE_URL", BASE_URL);
    }

    function Error400() {
        http_response_code(400);
        $this->smarty->assign("error_code", 400);
        $this->smarty->display("app/web/template/error.tpl");
    }
    function Error403($page) {
        http_response_code(403);
        $this->smarty->assign("error_code", 403);
        $this->smarty->assign("error_params", array($page));
        $this->smarty->display("app/web/template/error.tpl");
    }
    function Error404($page) {
        http_response_code(404);
        $this->smarty->assign("error_code", 404);
        $this->smarty->assign("error_params", array($page));
        $this->smarty->display("app/web/template/error.tpl");
    }
    function ErrorGeneric() {
        http_response_code(400);
        $this->smarty->assign("error_code", 1);
        $this->smarty->display("app/web/template/error.tpl");
    }
}
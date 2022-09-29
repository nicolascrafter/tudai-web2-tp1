<?php
class Controller {
    function error() {
        http_response_code(404);
        require_once "app/web/template/header.php";
        echo "404 Not Found";
        require_once "app/web/template/footer.php";
    }
}
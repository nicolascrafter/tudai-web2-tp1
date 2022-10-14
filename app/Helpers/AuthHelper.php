<?php

class AuthHelper {

    /*Verifica que el usuario este logueado
    Si no lo esta lo redirige al login */

    public function checkLogged() {
        session_start();
        if(!isset($_SESSION['IS_LOGGED'])) {
            header('Location: ' . BASE_URL . 'login');
            exit();
        }
    }

    public function isLoggedIn()
    {
        session_start();
        return $_SESSION["IS_LOGGED"];
    }
}
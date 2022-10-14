<?php

require_once './app/Model/AdminModel.php';
require_once './app/View/AuthView.php';

class AuthController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new AdminModel();
        $this->view = new AuthView();
    }

    public function showFormLogin() {
        $this->view->showFormLogin();
    }

    public function validateUser() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUserByEmail($email);
        //var_dump($user);
        
        if($user && password_verify($password, $user->password)) {

            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL . 'admin');
        } else {
            $this->view->showFormLogin("Usuario o contraseña incorrectos");
        }
        
    }


    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'index');
    }
}
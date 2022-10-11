<?php 

require_once 'view/LoginView.php';
require_once 'model/UsuarioModel.php';

class LoginController
{
    private $view;
    private $model;

    function __construct()
    {
        $this->view = new LoginView();
        $this->model = new UsuarioModel();
    }

    function login()
    {
        $this->view->loginHome();
    }

    function registrarUser() 
    {
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];

        $hash = password_hash($pass, PASSWORD_DEFAULT);

        $this->model->insertUser($nombre, $hash);

        header("Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');

    }

    function verificarLogin()
    {
        $user = $_POST['nombre'];
        $pass = $_POST['pass'];

        $dbUser = $this->model->getUser($user);

        if (isset($dbUser)) {
            if (password_verify($pass, $dbUser['pass'])) { //(lo que ingreso, lo que traigo de la db)
                header("Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
            }
        } else {
            $this->view->loginHome("Contraseña incorrecta");
        }
    }
}


?>
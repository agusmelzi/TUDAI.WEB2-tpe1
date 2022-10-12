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

    function logout()
    {
        session_start();
        session_destroy();
        header("Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');
    }

    function formularioRegistro()
    {
        $this->view->newUser();
    }
    

    function registrarUser() 
    {
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];

        $list = $this->model->showUsers();
        foreach ($list as $user) {
            if (strcmp($nombre,$user['nombre']) == 0) {
                 return $this->view->newUser("El usuario ingresado ya existe. Por favor, ingrese un nombre de usuario distinto");
            }
        }

        $hash = password_hash($pass, PASSWORD_DEFAULT);

        $this->model->insertUser($nombre, $hash);

        header("Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');

    }

    function verificarLogin()
    {
        $user = $_POST['nombre'];
        $pass = $_POST['pass'];

        $dbUser = $this->model->getUser($user);

        if (isset($dbUser['nombre']) && password_verify($pass, $dbUser['pass'])) {
            //password_verify($pass, $dbUser['pass'] (lo que ingreso, lo que traigo de la db)

                session_start();
                //acá van los cambios
                if ($dbUser['nombre'] == 'Admin') {
                    $_SESSION['nombre'] = 1;
                } else {
                    $_SESSION['nombre'] = 2;
                }

                header(HOME);
        } else {
            $this->view->loginHome("Usuario o contraseña incorrecta");
        }
    }
}


?>
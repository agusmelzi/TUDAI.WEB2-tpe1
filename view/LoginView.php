<?php 

require_once('libs/Smarty.class.php');

class LoginView
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();        
    }
    
    function loginHome($message = '')
    {
        $this->smarty->assign('titulo', "Login");
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/login.tpl');
    }

    function newUser($message = '') 
    {
        $this->smarty->assign('titulo', "Registrar usuario");
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/registrarUser.tpl');
    }
}


?>
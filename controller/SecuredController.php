<?php 

class SecuredController
{
    function __construct()
    {
        session_start();
        if (isset($_SESSION['nombre'])) {
            
        } else {
            header("Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');
        }
    }
}


?>
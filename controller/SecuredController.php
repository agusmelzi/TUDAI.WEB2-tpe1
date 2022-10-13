<?php 


class SecuredController
{

    function __construct()
    {

        session_start();
        if (isset($_SESSION['nombre'])) {
            /*switch ($_SESSION['nombre']) {
                case 1:
                   var_dump($_SESSION['nombre']);
                   break;
                case 2:
                    var_dump($_SESSION['nombre']);
                    //header(HOME);
                    break;
               }*/
        } else {
            //header(HOME);
        }
    }
}


?>
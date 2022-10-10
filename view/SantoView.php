<?php

require_once('libs/Smarty.class.php');


class SantoView
{



    function __construct()
    {
    }

    function showList($santos)
    {

        $smarty = new Smarty();
        $smarty->assign('titulo', "Lista de santos");
        $smarty->assign('santos', $santos);
        $smarty->display('templates/listaSantos.tpl');

        //VER CÓMO ACCEDER AL NOMBRE DE LA CONGREGACIÓN


    }

    function addNewSaint($congregaciones)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', "Nuevo santo");
        $smarty->assign('congregaciones', $congregaciones);
        $smarty->display('templates/newSaint.tpl');

        
    }

    function editSaint($congregaciones, $santo)
    {
        
        $smarty = new Smarty();
        $smarty->assign('titulo', "Editar santo");
        $smarty->assign('congregaciones', $congregaciones);
        $smarty->assign('santo', $santo);
        $smarty->display('templates/editSaint.tpl');
        
    }
}

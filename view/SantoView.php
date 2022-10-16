<?php

require_once('libs/Smarty.class.php');


class SantoView
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showList($santos, $congregaciones, $message = '')
    {
        $this->smarty->assign('titulo', "Lista de santos");
        $this->smarty->assign('santos', $santos);
        $this->smarty->assign('congregaciones', $congregaciones);
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/listaSantos.tpl');
    }

    function detalleSanto($santo, $congregacion)
    {
        $this->smarty->assign('titulo', "Detalle del Santo");
        $this->smarty->assign('santo', $santo);
        $this->smarty->assign('congregacion', $congregacion);
        $this->smarty->display('templates/detalleSanto.tpl');
    }

    function addNewSaint($congregaciones)
    {
        $this->smarty->assign('titulo', "Nuevo santo");
        $this->smarty->assign('congregaciones', $congregaciones);
        $this->smarty->display('templates/newSaint.tpl');
    }

    function editSaint($congregaciones, $santo)
    {
        $this->smarty->assign('titulo', "Editar santo");
        $this->smarty->assign('congregaciones', $congregaciones);
        $this->smarty->assign('santo', $santo);
        $this->smarty->display('templates/editSaint.tpl');
    }
}

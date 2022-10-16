<?php

require_once('libs/Smarty.class.php');


class CongregacionView
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showList($congregaciones)
    {

        $this->smarty->assign('titulo', "Lista de congregaciones");
        $this->smarty->assign('tituloNew', "Nueva congregación");
        $this->smarty->assign('borrarCongregacion', "Borrar congregación");
        $this->smarty->assign('congregaciones', $congregaciones);
        $this->smarty->display('templates/listaCongregaciones.tpl');
    }

    function editCongregation($congregacion)
    {

        $this->smarty->assign('titulo', "Editar congregación");
        $this->smarty->assign('congregacion', $congregacion);
        $this->smarty->display('templates/editCongregation.tpl');
    }
}

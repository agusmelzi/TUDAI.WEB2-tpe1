<?php 

require_once('libs/Smarty.class.php');


class CongregacionView {

    

    function __construct() {
        
    }

    function showList($congregaciones){
        
        $smarty = new Smarty();
        $smarty->assign('titulo', "Lista de congregaciones");
        $smarty->assign('tituloNew', "Nueva congregación");
        $smarty->assign('borrarCongregacion', "Borrar congregación");
        $smarty->assign('congregaciones', $congregaciones);
        $smarty->display('templates/listaCongregaciones.tpl');

    }

    function editCongregation($congregacion) {
      
        $smarty = new Smarty();
        $smarty->assign('titulo', "Editar congregación");
        $smarty->assign('congregacion', $congregacion);
        $smarty->display('templates/editCongregation.tpl');
                   
    }
    
}

?>
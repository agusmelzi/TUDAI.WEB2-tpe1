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
        $smarty->assign('titulo', "Nuevo de santo");
        $smarty->assign('congregaciones', $congregaciones);
        $smarty->display('templates/newSaint.tpl');

        
    }

    function editSaint($congregaciones, $santo)
    {
        

        echo '<div class="container py-4 px-5">

        <form action="/tpe1/update" method="post">
            <div class="mb-3">
                <input type="hidden" name="id" value="' . $santo['id'] . '">
            </div>
            <div class="mb-3">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputNombre" name="nombre" value="' . $santo['nombre'] . '" required>
            </div>
            <div class="mb-3">
                <label for="inputPais" class="form-label">País</label>
                <input type="text" class="form-control" id="inputPais" name="pais" value="' . $santo['pais'] . '" required>
            </div>
            <div class="mb-3">
                <label for="inputNacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="inputNacimiento" name="fecha_nacimiento" value="' . $santo['fecha_nacimiento'] . '" required>
            </div>
            <div class="mb-3">
                <label for="inputMuerte" class="form-label">Fecha de muerte</label>
                <input type="date" class="form-control" id="inputMuerte" name="fecha_muerte" value="' . $santo['fecha_muerte'] . '" required>
            </div>
            <div class="mb-3">
                <label for="inputCanonizacion" class="form-label">Fecha de canonización</label>
                <input type="date" class="form-control" id="inputCanonizacion" name="fecha_canonizacion" value="' . $santo['fecha_canonizacion'] . '" required>
            </div>
            <div class="mb-3">
                <label for="inputCongregacion" class="form-label">Congregación</label>

                <select id="inputCongregacion" class="form-select" name="congregacion_fk">';
        foreach ($congregaciones as $congregacion) {
            echo '<option value=' . $congregacion['id'] . '>' . $congregacion['nombre'] . '</option>';
        }

        echo '</select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        
        </div>';

        
    }
}

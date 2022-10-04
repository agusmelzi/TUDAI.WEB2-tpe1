<?php 

require_once 'blosquesDeCodigo.php';


class SantoView {

    

    function __construct() {
        
    }

    function showList($santos){
        htmlHead();
      
        echo '
        <div class="container py-4">
        <h1 class="text-center py-4">Lista de santos</h1>
        <hr class="border border-dark border-2 opacity-50">
            <form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">País</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Fecha de muerte</th>
                        <th scope="col">Fecha de canonización</th>
                        <th scope="col">Congregación</th>
                        </tr>
                    </thead>
                    <tbody>';
                    foreach($santos as $santo){
                        echo '<tr>
                        <td>'.$santo['nombre'].'</td>
                        <td>'.$santo['pais'].'</td>
                        <td>'.$santo['fecha_nacimiento'].'</td>
                        <td>'.$santo['fecha_muerte'].'</td>
                        <td>'.$santo['fecha_canonizacion'].'</td>
                        <td>'.$santo['congregacion_fk'].'</td>
                        <td><a href="borrar/'.$santo['id'].'">BORRAR</a></td>
                        </tr>';
                    }
                    echo '</tbody>
                </table>
            </form>
            <div><a href=agregar>AGREGAR</a></div>
      </div>';
      //VER CÓMO ACCEDER AL NOMBRE DE LA CONGREGACIÓN
      htmlFooter();

    }

    function addNewSaint($congregaciones) {
        htmlHead();
      
        echo '<div class="container py-4 px-5">

        <form action="new" method="post">
            <div class="mb-3">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputNombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="inputPais" class="form-label">País</label>
                <input type="text" class="form-control" id="inputPais" name="pais" required>
            </div>
            <div class="mb-3">
                <label for="inputNacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="inputNacimiento" name="fecha_nacimiento" required>
            </div>
            <div class="mb-3">
                <label for="inputMuerte" class="form-label">Fecha de muerte</label>
                <input type="date" class="form-control" id="inputMuerte" name="fecha_muerte" required>
            </div>
            <div class="mb-3">
                <label for="inputCanonizacion" class="form-label">Fecha de canonización</label>
                <input type="date" class="form-control" id="inputCanonizacion" name="fecha_canonizacion" required>
            </div>
            <div class="mb-3">
                <label for="inputCongregacion" class="form-label">Congregación</label>

                <select id="inputCongregacion" class="form-select" name="congregacion_fk">';
                    foreach($congregaciones as $congregacion){
                        echo '<option value='.$congregacion['id'].'>'.$congregacion['nombre'].'</option>';
                    }
                    
                echo '</select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        
        </div>';
                   
        htmlFooter();
    }
}

?>
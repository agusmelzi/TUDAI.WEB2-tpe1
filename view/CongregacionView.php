<?php 

require_once 'templates.php';


class CongregacionView {

    

    function __construct() {
        
    }

    function showList($congregaciones){
        htmlHead();
      
        echo '
        <div class="container py-4">
        <h1 class="text-center py-4">Lista de congregaciones</h1>
        <hr class="border border-dark border-2 opacity-50">';
            
                    if (empty($congregaciones)){
                        echo '<p>No hay congregaciones cargadas</p>';
                    } else {
                        echo '
                        <form>
                            <table class="table table-dark table-striped table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Fundador</th>
                                    <th scope="col">Lema</th>
                                    </tr>
                                </thead>
                                <tbody>';
                        foreach($congregaciones as $congregacion){
                            echo '<tr>
                            <td>'.$congregacion['nombre'].'</td>
                            <td>'.$congregacion['fundador'].'</td>
                            <td>'.$congregacion['lema'].'</td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#borrarCongregacion">
                                <i class="fa-solid fa-trash"></i>
                            </button></td>
                            </tr>';
                        }
                    
                    echo '
                    <!-- Modal -->
                        <div class="modal fade" id="borrarCongregacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    También se eliminarán los santos asociados a esta congregacion, ¿desea continuar?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <a href="borrarCongregacion/'.$congregacion['id'].'">
                                    <button type="button" class="btn btn-danger">Continuar</button>
                                    </a>
                                </div>
                            </div>
                        </div>';
                    }

                    echo '</tbody>
                </table>
            </form>
            <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevaCongregacion">
                Agregar
            </button>

                <div class="modal fade" id="nuevaCongregacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="agregarCongregacion" method="post">
                                <div class="mb-3">
                                    <label for="inputNombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="inputNombre" name="nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputFundador" class="form-label">Fundador</label>
                                    <input type="text" class="form-control" id="inputFundador" name="fundador" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputLema" class="form-label">Lema</label>
                                    <input type="text" class="form-control" id="inputLema" name="lema" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Crear</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>        
            </div>
      </div>';
      //VER CÓMO ACCEDER AL NOMBRE DE LA CONGREGACIÓN
      htmlFooter();

    }


    function addNewCongregation($congregaciones) {
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
<?php 

require_once('libs/Smarty.class.php');


class CongregacionView {

    

    function __construct() {
        
    }

    function showList($congregaciones){
        
      
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
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#borrarCongregacion">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
                <td>
                <a href="/tpe1/editarCongregacion/'.$congregacion['id'].'">
                    <button type="button" class="btn btn-primary">
                            <i class="fa-regular fa-pen-to-square"></i>
                    </button>
                </a>
                </td>
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
      

    }

    function editCongregation($congregacion) {
      
        echo '<div class="container py-4 px-5">

            <form action="/tpe1/updateCongregation" method="post">
                <div class="mb-3">
                    <input type="hidden" name="id" value="'.$congregacion['id'].'" required>
                </div>
                <div class="mb-3">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" name="nombre" value="'.$congregacion['nombre'].'" required>
                </div>
                <div class="mb-3">
                    <label for="inputFundador" class="form-label">Fundador</label>
                    <input type="text" class="form-control" id="inputFundador" name="fundador" value="'.$congregacion['fundador'].'" required>
                </div>
                <div class="mb-3">
                    <label for="inputLema" class="form-label">Lema</label>
                    <input type="text" class="form-control" id="inputLema" name="lema" value="'.$congregacion['lema'].'" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">EDITAR</button>
                </div>
            </form>

        </div>';
                   
    }

    

    
}

?>
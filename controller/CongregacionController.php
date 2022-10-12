<?php 

require_once "./view/CongregacionView.php";
require_once "./model/SantoModel.php";
require_once "./model/CongregacionModel.php";
require_once "SecuredController.php";

class CongregacionController extends SecuredController {

    private $view;
    private $model;


    function __construct() {
        parent::__construct();

        $this->view = new CongregacionView();
        $this->model = new CongregacionModel();
    }

    function listCongregations() {
        $congregaciones = $this->model->getCongregaciones();
        $this->view->showList($congregaciones);
    }

    function addCongregation() {
        
        $nombre = $_POST['nombre'];
        $fundador = $_POST['fundador'];
        $lema = $_POST['lema'];

        $this->model->insertCongregation($nombre, $fundador, $lema);

        header(CONGREGACIONES);
    }

    function editCongregation($param) {

        $congregacion = $this->model->editarCongregacion($param[0]);
        $this->view->editCongregation($congregacion);

    }

    function editarCongregacion() {
        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $fundador = $_POST['fundador'];
        $lema = $_POST['lema'];

        $this->model->updateCongregation($id, $nombre, $fundador, $lema);

        header(CONGREGACIONES);
    }

    function delete($param) {
        $this->model->borrarCongregacion($param[0]);
        header(CONGREGACIONES);
    }

}

?>
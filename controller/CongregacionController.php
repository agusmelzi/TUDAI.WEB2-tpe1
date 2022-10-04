<?php 

require_once "./view/CongregacionView.php";
require_once "./model/SantoModel.php";
require_once "./model/CongregacionModel.php";

class CongregacionController {

    private $view;
    private $model;
    private $modelC;


    function __construct() {
        $this->view = new CongregacionView();
        $this->model = new CongregacionModel();
    }


    function listCongregations() {
        $congregaciones = $this->model->getCongregaciones();
        $this->view->showList($congregaciones);
    }

    function createSaint() {
        //la idea es traer estos atributos desde un form
        $congregaciones = $this->modelC->getCongregaciones();
        $this->view->addNewCongregation($congregaciones);
        //header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
    }

    function addSaint() {
        
        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $fecha_nac = $_POST['fecha_nacimiento'];
        $fecha_muerte = $_POST['fecha_muerte'];
        $fecha_canon = $_POST['fecha_canonizacion'];
        $congregacion = $_POST['congregacion_fk'];

        $this->model->insertCongregacion($nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion);

        header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
    }

    function delete($param) {
        $this->model->borrarCongregacion($param[0]);
        header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
    }

}

?>
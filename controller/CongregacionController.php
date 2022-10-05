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

    function addCongregation() {
        
        $nombre = $_POST['nombre'];
        $fundador = $_POST['fundador'];
        $lema = $_POST['lema'];

        $this->model->insertCongregation($nombre, $fundador, $lema);

        header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/congregaciones');
    }

    function delete($param) {
        $this->model->borrarCongregacion($param[0]);
        header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/congregaciones');
    }

}

?>
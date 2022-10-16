<?php

require_once "./view/SantoView.php";
require_once "./model/SantoModel.php";
require_once "./model/CongregacionModel.php";
require_once "SecuredController.php";

class SantoController extends SecuredController
{

    private $view;
    private $model;
    private $modelC;


    function __construct()
    {
        parent::__construct();

        $this->view = new SantoView();
        $this->model = new SantoModel();
        $this->modelC = new CongregacionModel();
    }


    function home()
    {
        $santos = $this->model->getSantos();
        $congregaciones = $this->modelC->getCongregaciones();
        $this->view->showList($santos, $congregaciones);
    }

    function detalle($param)
    {
        $santo = $this->model->getSanto($param[0]);
        $congregacion = $this->modelC->getCongregacion($santo['congregacion_fk']);
        $this->view->detalleSanto($santo, $congregacion);
    }


    function santosXCategoria()
    {
        $categoria = $_POST['congregacion_fk'];
        $congregaciones = $this->modelC->getCongregaciones();

        $santos = $this->model->getSantosXCategoria($categoria);
        if ($santos == null) {
            $this->view->showList($santos, $congregaciones , 'No hay santos de esta congregación');
        } else {
            $this->view->showList($santos, $congregaciones);
        }
    }

    function createSaint()
    {
        $congregaciones = $this->modelC->getCongregaciones();
        $this->view->addNewSaint($congregaciones);
    }


    function addSaint()
    {

        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $fecha_nac = $_POST['fecha_nacimiento'];
        $fecha_muerte = $_POST['fecha_muerte'];
        $fecha_canon = $_POST['fecha_canonizacion'];
        $congregacion = $_POST['congregacion_fk'];
        $name = $_FILES['imagen']['name'];
        $tmp = $_FILES['imagen']['tmp_name'];
        $type = $_FILES['imagen']['type'];

        if ( $type == "image/jpg" || $type == "image/jpeg" || $type == "image/png") {
            $this->model->insertSanto($nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion, $name, $tmp);
        }else{
            $this->model->insertSanto($nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion, $name);
        }


        header(HOME);
    }

    function editSaint($param)
    {

        $congregaciones = $this->modelC->getCongregaciones();
        $santo = $this->model->editarSantos($param[0]);
        $this->view->editSaint($congregaciones, $santo);
    }

    function editarSanto()
    {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $fecha_nac = $_POST['fecha_nacimiento'];
        $fecha_muerte = $_POST['fecha_muerte'];
        $fecha_canon = $_POST['fecha_canonizacion'];
        $congregacion = $_POST['congregacion_fk'];
        $name = $_FILES['imagen']['name'];
        $tmp = $_FILES['imagen']['tmp_name'];
        $type = $_FILES['imagen']['type'];

        if ($name != '') {
            if ( $type == "image/jpg" || $type == "image/jpeg" || $type == "image/png") {
                $this->model->updateSanto($id, $nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion, $name, $tmp);
            }else{
                $this->model->updateSanto($id, $nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion, $name);
            }
        } else {
            $this->model->updateSanto($id, $nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion);
        }
        
        header(HOME);
    }

    function delete($param)
    {
        $this->model->borrarSanto($param[0]);
        header(HOME);
    }
}

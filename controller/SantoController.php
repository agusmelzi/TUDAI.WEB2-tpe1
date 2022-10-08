<?php

require_once "./view/SantoView.php";
require_once "./model/SantoModel.php";
require_once "./model/CongregacionModel.php";

class SantoController
{

    private $view;
    private $model;
    private $modelC;


    function __construct()
    {
        $this->view = new SantoView();
        $this->model = new SantoModel();
        $this->modelC = new CongregacionModel();
    }


    function home()
    {
        $santos = $this->model->getSantos();
        $this->view->showList($santos);
    }

    function santosXCategoria()
    {
        $categoria = $_POST['categoria'];
        if (empty($categoria)) {
            $santos = $this->model->getSantos();
            $this->view->showList($santos);
        } else {
            $santos = $this->model->getSantosXCategoria($categoria);
            if ($santos == null) {
                $santos = $this->model->getSantos();
                $this->view->showList($santos);
            } else {
                $this->view->showList($santos);
            }
        }
    }

    function createSaint()
    {
        //la idea es traer estos atributos desde un form
        $congregaciones = $this->modelC->getCongregaciones();
        $this->view->addNewSaint($congregaciones);
        //header("Location: http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
    }


    function addSaint()
    {

        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $fecha_nac = $_POST['fecha_nacimiento'];
        $fecha_muerte = $_POST['fecha_muerte'];
        $fecha_canon = $_POST['fecha_canonizacion'];
        $congregacion = $_POST['congregacion_fk'];

        $this->model->insertSanto($nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion);

        header("Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
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

        $this->model->updateSanto($id, $nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion);

        header("Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
    }

    function delete($param)
    {
        $this->model->borrarSanto($param[0]);
        header("Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
    }
}

<?php 

class SantoModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'
        .'dbname=santoral;charset=utf8'
        , 'root', '');
    }

    function getSantos(){
      
        $sentencia = $this->db->prepare("select * from santo");
        $sentencia->execute();
      
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertSanto($nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion){

      $sentencia = $this->db->prepare("INSERT INTO santo(
        nombre, pais, fecha_nacimiento, fecha_muerte, fecha_cononizacion, congregacion_fk) 
        ");
      $sentencia->execute(array($nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion));
      
    }
      
      function borrarSanto($id){

        $sentencia = $this->db->prepare("delete from santo where id=?");
        $sentencia->execute(array($id));
        //contemplar foreing key
      }

}

?>
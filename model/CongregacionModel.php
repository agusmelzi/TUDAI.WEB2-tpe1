<?php 

class CongregacionModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'
        .'dbname=santoral;charset=utf8'
        , 'root', '');
    }

    function getCongregaciones(){
      
        $sentencia = $this->db->prepare("select * from congregacion");
        $sentencia->execute();
      
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertCongregacion($nombre, $fundador, $lema){
      
        $sentencia = $this->db->prepare("INSERT INTO congregacion(
          nombre, fundador, lema) 
          VALUES(?,?,?)");
        $sentencia->execute(array($nombre, $fundador, $lema));
        
      }
      
      function borrarCongregacion($id){

        $sentencia = $this->db->prepare("delete from congregacion where id=?");
        $sentencia->execute(array($id));
        //contemplar foreing key
      }

}

?>
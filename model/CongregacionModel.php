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

    function getCongregacion($id){
      
      $sentencia = $this->db->prepare("select nombre from congregacion WHERE id=?");
      $sentencia->execute(array($id));
    
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

    function insertCongregation($nombre, $fundador, $lema){
      
        $sentencia = $this->db->prepare("INSERT INTO congregacion(
          nombre, fundador, lema) 
          VALUES(?,?,?)");
        $sentencia->execute(array($nombre, $fundador, $lema));
        
      }

      function editarCongregacion($id){
      
        $sentencia = $this->db->prepare("select * from congregacion WHERE id=?");
        $sentencia->execute(array($id));
      
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function updateCongregation($id, $nombre, $fundador, $lema){

      $sentencia = $this->db->prepare("UPDATE congregacion SET
        nombre = ?,
        fundador = ?,
        lema = ?
        WHERE id = ?");
      $sentencia->execute(array($nombre, $fundador, $lema, $id));
      
    }
      
      function borrarCongregacion($id){

        $sentencia = $this->db->prepare("delete from congregacion where id=?");
        $sentencia->execute(array($id));
        //contemplar foreing key
      }

}

?>
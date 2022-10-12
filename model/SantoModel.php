<?php

class SantoModel
{

  private $db;

  function __construct()
  {
    $this->db = new PDO(
      'mysql:host=localhost;'
        . 'dbname=santoral;charset=utf8',
      'root',
      ''
    );
  }

  function getSantos()
  {

    $sentencia = $this->db->prepare("select * from santo");
    $sentencia->execute();

    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  } 

  function getSanto($id)
  {

    $sentencia = $this->db->prepare("select * from santo WHERE id=?");
    $sentencia->execute(array($id));

    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }


  function getSantosXCategoria($categoria)
  {

    $sentencia = $this->db->prepare("select * from santo WHERE congregacion_fk=?");
    $sentencia->execute(array($categoria));

    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function insertSanto($nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion)
  {

    $sentencia = $this->db->prepare("INSERT INTO santo(
        nombre, pais, fecha_nacimiento, fecha_muerte, fecha_canonizacion, congregacion_fk) 
        VALUES (?,?,?,?,?,?)");
    $sentencia->execute(array($nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion));

    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function editarSantos($id)
  {

    if ($id == 0) {
    }
    $sentencia = $this->db->prepare("select * from santo WHERE id=?");
    $sentencia->execute(array($id));

    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function updateSanto($id, $nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion)
  {

    $sentencia = $this->db->prepare("UPDATE santo SET
        nombre = ?,
        pais = ?,
        fecha_nacimiento = ?,
        fecha_muerte = ?,
        fecha_canonizacion = ?,
        congregacion_fk = ? 
        WHERE id = ?");
    $sentencia->execute(array($nombre, $pais, $fecha_nac, $fecha_muerte, $fecha_canon, $congregacion, $id));
  }

  function borrarSanto($id)
  {

    $sentencia = $this->db->prepare("delete from santo where id=?");
    $sentencia->execute(array($id));
    //contemplar foreing key
  }
}

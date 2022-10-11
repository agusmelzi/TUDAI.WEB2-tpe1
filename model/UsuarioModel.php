<?php

class UsuarioModel
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

    function showUsers()
    {
        $sentencia = $this->db->prepare("select * from usuario");
        $sentencia->execute();
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function insertUser($nombre, $pass)
    {
        $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, pass) VALUES(?,?)");
        $sentencia->execute(array($nombre, $pass));
    }

    function getUser($user)
    {
        $sentencia = $this->db->prepare("select * from usuario where nombre=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
}

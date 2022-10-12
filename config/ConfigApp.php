<?php 

define('HOME', "Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
define('LOGIN', "Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', "Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/logout');
define('CONGREGACIONES', "Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/congregaciones');

class configApp
{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    '' => 'SantoController#home',
    'home' => 'SantoController#home',
    'santosXCategoria' => 'SantoController#santosXCategoria',
    'borrar' => 'SantoController#delete',
    'agregar' => 'SantoController#createSaint',
    'new' => 'SantoController#addSaint',
    'edit' => 'SantoController#editSaint',
    'update' => 'SantoController#editarSanto',
    'congregaciones' => 'CongregacionController#listCongregations',
    'agregarCongregacion' => 'CongregacionController#addCongregation',
    'editarCongregacion' => 'CongregacionController#editCongregation',
    'updateCongregation' => 'CongregacionController#editarCongregacion',
    'borrarCongregacion' => 'CongregacionController#delete',
    'login' => 'LoginController#login',
    'logout' => 'LoginController#logout',
    'verificarLogin' => 'LoginController#verificarLogin',
    'registrarse' => 'LoginController#registrarUser',
    'nuevoUsuario' => 'LoginController#formularioRegistro'
  ];
}

?>
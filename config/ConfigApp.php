<?php 

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
    'borrarCongregacion' => 'CongregacionController#delete'
  ];
}

?>
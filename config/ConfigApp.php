<?php 

class configApp
{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    '' => 'SantoController#home',
    'home' => 'SantoController#home',
    'borrar' => 'SantoController#delete',
    'agregar' => 'SantoController#createSaint',
    'new' => 'SantoController#addSaint'
  ];
}

?>
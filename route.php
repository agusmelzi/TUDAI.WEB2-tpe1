<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');


require_once 'config/ConfigApp.php';
require_once 'controller/SantoController.php';
require_once 'controller/CongregacionController.php';
require_once 'controller/LoginController.php';
require_once 'controller/SecuredController.php';

function parseURL($url) {
  $urlExploded = explode('/', $url);
  $arrayReturn[configApp::$ACTION] = $urlExploded[0];
  $arrayReturn[configApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded, 1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){

  $urlData = parseURL($_GET['action']);
  $action = $urlData[configApp::$ACTION];
  if (array_key_exists($action, configApp::$ACTIONS)) {
    $params = $urlData[configApp::$PARAMS];
    $action = explode('#', configApp::$ACTIONS[$action]);
    $controller = new $action[0]();
    $metodo = $action[1];
    if (isset($params) && $params != null) {
      echo $controller->$metodo($params);
    } else {
      echo $controller->$metodo();
    }
  } else {
    $controller = new SantoController();
    echo $controller->home();
  }
}

?>
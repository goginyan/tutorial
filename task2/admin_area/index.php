<?php

require_once __DIR__ . '/controllers/ControllerPro.php';
//require_once __DIR__ . 'autoload.php';
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'Pro';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';


$controllerClassName ='Controller' .  $ctrl;

require_once __DIR__ . '/controllers/'. $controllerClassName.'.php';

$controller = new $controllerClassName;

$method = 'action' . $act;
$controller->$method();

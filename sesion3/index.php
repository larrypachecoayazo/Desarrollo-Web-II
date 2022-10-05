<?php




ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config/config.php';


// 1. Validar la existencia del parametro 'controller'
// ...

$nameController = ucfirst($_GET['controller']).'Controller'; 
$pathController = 'Controller/' . $nameController . '.php';


// 2. Validar la existencia del archivo
// ...

// 3. Validar la existencia del parámetro 'action'
// ..
$action = $_GET['action'];

require_once $pathController;

$controller = new $nameController();
$controller->$action();
<?php
//require_once 'config.php';

require_once 'config.php';

define('ROOT_PATH', __DIR__);

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Standard';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerClassName = '\Fbreuer\MetinCms\Controller\\' . $controller . 'Controller';
$controller = new $controllerClassName();

if (!method_exists($controller, $action . 'Action')) {
    //throw new Exception('Unkown method/controller');
    $action = "wrongController";
    call_user_func(array($controller, $action . 'Action'));
}else{
    call_user_func(array($controller, $action . 'Action'));
}

//ini_set("display_errors",true);
//error_reporting(E_ALL);
//
//$servername = "25.150.155.199";
//$username = "root";
//$password = "root";
//$datenbank = "account";
//
//$conn = new mysqli($servername, $username, $password);
//
//$db = mysqli_select_db($conn, $datenbank);
//
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
?>



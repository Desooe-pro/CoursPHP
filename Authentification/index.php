<?php
session_start();

$action = isset($_GET['action']) ? $_GET['action'] : 'base';

if (isset($_SESSION['utilisateur'])){
    $action = "connected";
}

require_once "LogController.php";
$controller = new Controller();

switch ($action) {
    case "connected" :
        header("Location: Admin.php");
        break;

    case "base" :
        $controller::base();
        break;

    case "register" :
        $controller::register();
        break;

    case "login" :
        $controller::login();
        break;

    default :
        echo "Action non éxistante";
}
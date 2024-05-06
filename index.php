<?php
// Start the session
session_start();
// load Smarty library
require('smarty/libs/Smarty.class.php');
require('dbsqlconnect.php');

$db = new Database();

if(isset($_POST['action'])){
   
    $action = $_POST['action'];
    if($action === 'filter'){ 
        $customer = $db->getById($_POST['id']);
    } else if ($action ==="next"){      
        if(isset($_SESSION['start'])){
            $_SESSION['start']++;
        }else{
            $_SESSION['start'] = 0;
        }
        $customer = $db->getAllUsers($_SESSION['start']);
    } else if ($action === "Delete") {
        $db->deleteUsers($_POST['userid']);
        $_SESSION['start'] = 0;
    $customer = $db->getAllUsers($_SESSION['start']);
    }
}else{
    $_SESSION['start'] = 0;
    $customer = $db->getAllUsers($_SESSION['start']);
}

if(!isset($_SESSION['user'])){
    header("Location: http://localhost/demo/login.php");
}

$smarty = new Smarty;

$smarty->template_dir = 'smarty/templates';
$smarty->config_dir = 'smarty/config';
$smarty->cache_dir = 'cache';
$smarty->compile_dir = 'templates_c';

$smarty->assign('re',$_SESSION['user']);
$smarty->assign('customer',$customer);
$smarty->display('a.tpl');

?>
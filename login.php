<?php
// Start the session
session_start();
// load Smarty library
require('smarty/libs/Smarty.class.php');
require('dbsqlconnect.php');
$db = new Database();
$error = $db->login();


if($_SERVER['REQUEST_METHOD'] == "GET"){ 
    // remove all session variables
session_unset();

// destroy the session
session_destroy();

}
if(isset($_SESSION['user'])){
    header("Location: http://localhost/demo");
}

$smarty = new Smarty;

$smarty->template_dir = 'smarty/templates';
$smarty->config_dir = 'smarty/config';
$smarty->cache_dir = 'cache';
$smarty->compile_dir = 'templates_c';
$obj = [
    'username' =>  $_POST['username'] ?? "",
    'password' => $_POST['password'] ?? ""
];
$smarty->assign('user', $obj);
$smarty->assign('error', $error);
$smarty->display('b.tpl');
?>
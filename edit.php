<?php

session_start();
// load Smarty library
require('smarty/libs/Smarty.class.php');
require('dbsqlconnect.php');

$smarty = new Smarty;

$smarty->template_dir = 'smarty/templates';
$smarty->config_dir = 'smarty/config';
$smarty->cache_dir = 'cache';
$smarty->compile_dir = 'templates_c';
$db = new Database();
if(isset($_GET["userid"])){ 
    $id = $_GET["userid"];
    $user = $db->getById($id);
     $smarty->assign("user", $user[0]);
}

if(isset($_POST['action'])){ 

    if($_POST['action'] === "update"){ 

    $obj = [
        "userid" => $_POST['userid'] ?? "",
        "username" =>  $_POST['username'] ?? "",
        "password" =>  $_POST['password'] ?? ""
    
    ];
  if(!empty($_POST['userid'])){ 

    $db->updateUser($obj);
     header("Location: http://localhost/demo");
    } else { 
        $db->saveUser($obj);
        header("Location: http://localhost/demo");
    }
  
} else if ($_POST['action'] === "clear"){ 
     $obj = [
        "USERID" =>  null,
        "USERNAME" => null,
        "PASSWORD" =>  null
    
    ];

    $smarty->assign('user', $obj);
}
}

 $smarty->display("c.tpl");


?>
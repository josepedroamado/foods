<?php
session_start();

//Include library
require_once('libs/Smarty.class.php');

//Create instance
$smarty = new Smarty();

//Config smarty folders
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

//Execute logic 
$smarty->assign("userInput", $_COOKIE['user']);
$smarty->assign("error", $_SESSION['error']);

//Send result to client
$smarty->display('login.tpl');

unset($_SESSION['error']);

?>

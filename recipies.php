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
if(!$_SESSION['logged']){
    $_SESSION['error'] = "Debe ingresar para acceder a las publicaciones.";
    header("Location: login.php");
}
else{
	//Send result to client
	$smarty->display('recipies.tpl');
}
?>

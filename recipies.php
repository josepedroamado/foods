<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');

if(!$_SESSION['logged']){
    $_SESSION['error'] = "Debe ingresar para acceder a las publicaciones.";
    header("Location: login.php");
}
else{
	//Send result to client
	$smarty->display('recipies.tpl');
}
?>

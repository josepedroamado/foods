<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');

if($_SESSION['admin'] == 1){
	$smarty->assign("errorCat", $_SESSION['errorCat']);

    //Send result to client
	$smarty->display('adminCat.tpl');

	unset($_SESSION['errorCat']);
}
else{
	$_SESSION['error'] = "Debe ingresar como administrador para acceder al menu de Administración del Blog.";
    header("Location: login.php");
}
?>

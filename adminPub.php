<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

if($_SESSION['admin'] == 1){
    //Send result to client
	$smarty->display('adminPub.tpl');
}
else{
	$_SESSION['error'] = "Debe ingresar como administrador para acceder al menu de Administración del Blog.";
    header("Location: login.php");
}
?>

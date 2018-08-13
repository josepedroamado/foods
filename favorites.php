<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');

if($_SESSION['logged']){
    //Send result to client
	$smarty->display('favorites.tpl');
}
else{
	$_SESSION['error'] = "Debe ingresar para acceder a las publicaciones.";
    header("Location: login.php");
}
?>


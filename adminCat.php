<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

if($_SESSION['admin'] == 1){
	//Consulto por categorias
	if ($conn) {
		$sql = "SELECT * FROM categorias";
		$parametros = array();
		$result = $conn->consulta($sql, $parametros);
		if ($result) {
			$cats = $conn->restantesRegistros();
			$smarty->assign("cats", $cats);
		}
		else{
			echo "Error de consulta";
		}
	}
	else{
		echo "Error de conexión: " . $conn->ultimoError();
	}

    //Send result to client
	$smarty->display('adminCat.tpl');
}
else{
	$_SESSION['error'] = "Debe ingresar como administrador para acceder al menu de Administración del Blog.";
    header("Location: login.php");
}
?>

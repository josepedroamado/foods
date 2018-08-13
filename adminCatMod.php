<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

$id = $_POST['id'];

if($_SESSION['admin'] == 1){
	//Consulto por la publicacion a modificar
	if ($conn) {
		$sql = "SELECT * FROM categorias
				WHERE categoria_id = :id";
		$parametros = array();
		$parametros[0] = array("id", $id, "int"); 
		$result = $conn->consulta($sql, $parametros);
		if ($result) {
			$cats = $conn->restantesRegistros();
			$smarty->assign("cat", $cats[0]);
		}
		else{
			echo "Error de consulta";
		}
	}
	else{
		echo "Error de conexión: " . $conn->ultimoError();
	}

	//Send result to client
	$smarty->display('adminCatMod.tpl');
}
else{
	$_SESSION['error'] = "Debe ingresar como administrador para acceder al menu de Administración del Blog.";
    header("Location: login.php");
}
?>

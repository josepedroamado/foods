<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

$id = $_GET['id'];

if($_SESSION['admin'] == 1){
	//Consulto por tipos
	if ($conn) {
		$sql = "SELECT * FROM tipos";
		$parametros = array();
		$result = $conn->consulta($sql, $parametros);
		if ($result) {
			$types = $conn->restantesRegistros();
			$smarty->assign("types", $types);
		}
		else{
			echo "Error de consulta";
		}
	}
	else{
		echo "Error de conexión: " . $conn->ultimoError();
	}

	//Consulto por publicaciones
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

	//Consulto por la publicacion a modificar
	if ($conn) {
		$sql = "SELECT * FROM publicaciones
				WHERE publicaciones.publicacion_id = :id";
		$parametros = array();
		$parametros[0] = array("id", $id, "int"); 
		$result = $conn->consulta($sql, $parametros);
		if ($result) {
			$pubs = $conn->restantesRegistros();
			$smarty->assign("pub", $pubs[0]);
		}
		else{
			echo "Error de consulta";
		}
	}
	else{
		echo "Error de conexión: " . $conn->ultimoError();
	}

	//Send result to client
	$smarty->display('adminPubMod.tpl');
}
else{
	$_SESSION['error'] = "Debe ingresar como administrador para acceder al menu de Administración del Blog.";
    header("Location: login.php");
}
?>

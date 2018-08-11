<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

if($_SESSION['admin'] == 1){
	//Consulto por publicaciones
	if ($conn) {
		$sql = "SELECT publicaciones.*, categorias.nombreCat, usuarios.nombreUsr, usuarios.apellido, tipos.nombreTipo
				FROM publicaciones, categorias, usuarios, tipos
				WHERE publicaciones.usuario_id = usuarios.usuario_id AND publicaciones.tipo_id = tipos.tipo_id AND publicaciones.categoria_id = categorias.categoria_id
				ORDER BY fecha ASC";
		$parametros = array();
		$result = $conn->consulta($sql, $parametros);
		if ($result) {
			$pubs = $conn->restantesRegistros();
			$smarty->assign("pubs", $pubs);
		}
		else{
			echo "Error de consulta";
		}
	}
	else{
		echo "Error de conexión: " . $conn->ultimoError();
	}
    //Send result to client
	$smarty->display('adminPub.tpl');
}
else{
	$_SESSION['error'] = "Debe ingresar como administrador para acceder al menu de Administración del Blog.";
    header("Location: login.php");
}
?>

<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

$id = $_GET['id'];

if($_SESSION['admin'] == 1){
	//Consulto por el usuario
	if ($conn) {
		$sql = "SELECT usuario_id, nombreUsr, apellido, email, administrador, eliminado FROM usuarios WHERE usuarios.usuario_id = :id";
		$parametros = array();
		$parametros[0] = array("id", $id, "int");
		$result = $conn->consulta($sql, $parametros);
		if ($result) {
			$usrs = $conn->restantesRegistros();
			$smarty->assign("usr", $usrs[0]);
		}
		else{
			echo "Error de consulta";
		}
	}
	else{
		echo "Error de conexión: " . $conn->ultimoError();
	}

	//Send result to client
	$smarty->display('adminUsrMod.tpl');
}
else{
	$_SESSION['error'] = "Debe ingresar como administrador para acceder al menu de Administración del Blog.";
    header("Location: login.php");
}
?>

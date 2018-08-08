<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

if($_SESSION['admin'] == 1){
    //Consulto por usuarios
	if ($conn) {
		$sql = "SELECT usuario_id, nombreUsr, apellido, email, administrador FROM usuarios";
		$parametros = array();
		$result = $conn->consulta($sql, $parametros);
		if ($result) {
			$usrs = $conn->restantesRegistros();
			$smarty->assign("usrs", $usrs);
		}
		else{
			echo "Error de consulta";
		}
	}
	else{
		echo "Error de conexión: " . $conn->ultimoError();
	}

	//Send result to client
	$smarty->display('adminUsr.tpl');
}
else{
	$_SESSION['error'] = "Debe ingresar como administrador para acceder al menu de Administración del Blog.";
    header("Location: login.php");
}
?>

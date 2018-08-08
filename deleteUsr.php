<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$user_id = (int)$_GET['user_id'];
 
die("Id=" . $id);

//Creo conexion con base de datos
$conn = new ConexionBD(MOTOR, SERVER, DB, USER, PASSWORD);
$conn->conectar();
if ($conn) {
	$sql = "DELETE FROM usuarios WHERE usuario_id = :user_id";
	$parametros = array();
	$parametros[0] = array("user_id", $user_id, "int");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
		header("Location: adminUsr.php");
	}
	else{
		header("Location: errores.php");
	}
}
else{
	header("Location: errores.php");
}

?>

<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$publicacion_id = $_POST['id'];
$usuario_id = $_SESSION['id'];

if ($conn) {
	$sql = "DELETE FROM favoritos WHERE usuario_id = :usuario_id AND publicacion_id = :publicacion_id";
	$parametros = array();
	$parametros[0] = array("publicacion_id", $publicacion_id, "int");
	$parametros[1] = array("usuario_id", $usuario_id, "int");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
		header('Location: favorites.php');
	}
	else{
		echo "Error de consulta" . $conn->ultimoError();
	}
}
else{
	echo "Error de conexión: " . $conn->ultimoError();
}
?>
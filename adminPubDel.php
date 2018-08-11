<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$id = $_GET['id'];

if ($conn) {
	$sql = "UPDATE publicaciones
			SET eliminado = 1
			WHERE publicaciones.publicacion_id = :id";
	$parametros = array();
	$parametros[0] = array("id", $id, "int");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
		header('Location: adminPub.php');
	}
	else{
		echo "Error de consulta" . $conn->ultimoError();
	}
}
else{
	echo "Error de conexión: " . $conn->ultimoError();
}

?>

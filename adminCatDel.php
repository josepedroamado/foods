<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$id = $_POST['id'];

//Checkeo si existe
if ($conn) {
	$sql = "SELECT * FROM categorias WHERE categoria_id = :id";
	$parametros = array();
	$parametros[0] = array("id", $id, "int");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
		$cat = $conn->siguienteRegistro();
		if($cat) {
			if ($conn) {
				$sql = "DELETE FROM categorias WHERE categoria_id = :id)";
				$parametros = array();
				$parametros[0] = array("id", $id, "int");
				$result = $conn->consulta($sql, $parametros);
				if ($result) {
					header('Location: adminCat.php');
				}
				else{
					echo "Error de consulta" . $conn->ultimoError();
				}
			}
			else{
				echo "Error de conexión: " . $conn->ultimoError();
			}
		}
	}
	else{
		echo "Error de consulta" . $conn->ultimoError();
	}
}
else{
	echo "Error de conexión: " . $conn->ultimoError();
}

header('Location: adminCat.php');
?>

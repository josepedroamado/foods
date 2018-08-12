<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$nombreCat = $_POST['nombreCat'];

if($nombreCat!=""){
	if ($conn) {
		$sql = "SELECT * FROM categorias WHERE nombreCat = :nombreCat";
		$parametros = array();
		$parametros[0] = array("nombreCat", $nombreCat, "string");
		$result = $conn->consulta($sql, $parametros);
		if ($result) {
			$cat = $conn->siguienteRegistro();
			if($cat != false) {
				$_SESSION['errorCat'] = 1;
				header('Location: adminCat.php');
			}
			else{
				if ($conn) {
					$sql = "INSERT INTO categorias(nombreCat) VALUES (:nombreCat)";
					$parametros = array();
					$parametros[0] = array("nombreCat", $nombreCat, "string");
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
	
}
else{
    header("Location: errors.php");
}
?>

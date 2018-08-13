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
			//Checkear si tiene publicaciones activas
			$sql = "SELECT COUNT(*) cantidad FROM publicaciones WHERE categoria_id = :id AND eliminado = 0";
		    $parametros = array(); 
		    $parametros[0] = array("id", $id, "int");

		    //Ejecuto la consulta con los parámetros
		    $result = $conn->consulta($sql, $parametros);   
		    $fila = $conn->siguienteRegistro();
		    
		    if ($fila['cantidad'] == 0) {
		    	//Elimino
				$sql = "UPDATE categorias SET eliminado = 1 WHERE categoria_id = :id";
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
				//Alert no se puede eliminar una categoria con publicaciones activas
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

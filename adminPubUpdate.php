<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$id = $_POST['id'];
$title = $_POST['titlePub'];
$textBody = $_POST['bodyTest'];
$cat = $_POST['cat'];
$type = $_POST['type'];
$user_id = $_SESSION['id'];

//defino un nombre unico para la imagen
$photo = date("YmdHis") . "_" . $_FILES['pictureInput']['name'];
//veo si llego al servidor
if(is_uploaded_file($_FILES['pictureInput']['tmp_name'])){
    //muevo y veo si pude mover al destino
    if(move_uploaded_file($_FILES['pictureInput']['tmp_name'], "img/" . $photo)){
    	if($title!="" && $textBody!="" && $cat!="" && $type!="" && $user_id!="" && $photo!=""){
			if ($conn) {
				$sql = "UPDATE publicaciones
						SET titulo= :title, texto= :textBody, imagen= :photo, categoria_id= :cat, tipo_id= :type
						WHERE publicaciones.publicacion_id = :id";
				$parametros = array();
				$parametros[0] = array("title", $title, "string");
				$parametros[1] = array("textBody", $textBody, "string");
				$parametros[2] = array("photo", $photo, "string");
				$parametros[3] = array("cat", $cat, "int");
				$parametros[4] = array("type", $type, "int");
				$parametros[5] = array("id", $id, "int");
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
		}
		else{
		    header("Location: errors.php");
		}
    }
    else{
    	die("Error al mover archivo");
    }
}
else{
	//Si no tengo imagen nueva
	if($title!="" && $textBody!="" && $cat!="" && $type!="" && $user_id!=""){
		if ($conn) {
			$sql = "UPDATE publicaciones
					SET titulo= :title, texto= :textBody, categoria_id= :cat, tipo_id= :type
					WHERE publicaciones.publicacion_id = :id";
			$parametros = array();
			$parametros[0] = array("title", $title, "string");
			$parametros[1] = array("textBody", $textBody, "string");
			$parametros[2] = array("cat", $cat, "int");
			$parametros[3] = array("type", $type, "int");
			$parametros[4] = array("id", $id, "int");
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
	}
	else{
	    header("Location: errors.php");
	}
}
?>

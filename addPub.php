<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$title = $_POST['titlePub'];
$textBody = $_POST['bodyTest'];
$cat = $_POST['cat'];
$type = $_POST['type'];
$user_id = $_SESSION['id'];

//defino un nombre unico para la imagen
$photo = date("YmdHis") . "_" . $_FILES['pictureInput']['name'];
//veo si llego al servidor
if(is_uploaded_file($_FILES['pictureInput']['tmp_name'])){
    //verifico el tipo
    // if($_FILES['pictureInput']['type']=="image/png"){
        //muevo y veo si pude mover al destino
        if(!move_uploaded_file($_FILES['pictureInput']['tmp_name'], "img/" . $photo)){
            die("Error al mover archivo");
        }
    // }
    // else{
    //     die("Error tipo archivo");
    // }
}
else{
    die("ERROR");
}

if($title!="" && $textBody!="" && $cat!="" && $type!="" && $user_id!="" && $photo!=""){
	if ($conn) {
		$sql = "INSERT INTO publicaciones(titulo, texto, fecha, imagen, categoria_id, tipo_id, usuario_id) VALUES (:title, :textBody, now(), :photo, :cat, :type, :user_id)";
		$parametros = array();
		$parametros[0] = array("title", $title, "string");
		$parametros[1] = array("textBody", $textBody, "string");
		$parametros[2] = array("photo", $photo, "string");
		$parametros[3] = array("cat", $cat, "int");
		$parametros[4] = array("type", $type, "int");
		$parametros[5] = array("user_id", $user_id, "int");
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
?>

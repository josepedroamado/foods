<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$title = $_POST['titlePub'];
$textBody = $_POST['bodyTest'];
$photo = $_POST['pictureInput'];
$cat = $_POST['cat'];
$type = $_POST['type'];
$user_id = $_SESSION['id'];

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
?>

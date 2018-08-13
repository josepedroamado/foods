<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$comment = $_POST['comment'];
$user_id = $_POST['user_id'];
$post_id = $_POST['post_id'];

//Busco la publicacion del ID
if ($conn) {
	$sql = "INSERT INTO comentarios(fecha, detalle, usuario_id, publicacion_id) VALUES (now(), :comment, :user_id, :post_id)";
	$parametros = array();
	$parametros[0] = array("comment", $comment, "string");
	$parametros[1] = array("user_id", $user_id, "int");
	$parametros[2] = array("post_id", $post_id, "int");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
		header("Location: post.php?id=" . $post_id);
	}
	else{
		echo "Error de consulta";
	}
}
else{
	echo "Error de conexión: " . $conn->ultimoError();
}

?>
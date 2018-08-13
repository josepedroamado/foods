<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$reply = $_POST['reply'];
$comment_id = $_POST['comment_id'];
$post_id = $_POST['post_id'];

//Busco la publicacion del ID
if ($conn) {
	$sql = "UPDATE comentarios SET respuesta = :reply WHERE comentario_id = :comment_id";
	$parametros = array();
	$parametros[0] = array("reply", $reply, "string");
	$parametros[1] = array("comment_id", $comment_id, "int");
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
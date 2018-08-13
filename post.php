<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

$id = $_GET['id'];

//Busco la publicacion del ID
if ($conn) {
	$sql = "SELECT publicaciones.*, categorias.nombreCat, usuarios.nombreUsr, usuarios.apellido, tipos.nombreTipo
			FROM publicaciones, categorias, usuarios, tipos
			WHERE publicaciones.categoria_id = categorias.categoria_id AND publicaciones.eliminado =0 AND publicaciones.usuario_id = usuarios.usuario_id AND publicaciones.publicacion_id = :id AND publicaciones.tipo_id = tipos.tipo_id";
	$parametros = array();
	$parametros[0] = array("id", $id, "int");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
		$post = $conn->restantesRegistros();
		$smarty->assign("post", $post[0]);
		//Send result to client
		$smarty->display('post.tpl');
	}
	else{
		echo "Error de consulta";
	}
}
else{
	echo "Error de conexión: " . $conn->ultimoError();
}

?>
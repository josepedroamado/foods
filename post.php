<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

$id = $_GET['id'];
$logged = $_SESSION['logged'];
$usuario_id = $_SESSION['id'];

$smarty->assign("usuario_id", $usuario_id);

//Busco la publicacion del ID
if ($conn) {
	$sql = "SELECT publicaciones.*, categorias.nombreCat, usuarios.nombreUsr, usuarios.apellido, tipos.nombreTipo, usuarios.usuario_id
			FROM publicaciones, categorias, usuarios, tipos
			WHERE publicaciones.categoria_id = categorias.categoria_id AND publicaciones.eliminado =0 AND publicaciones.usuario_id = usuarios.usuario_id AND publicaciones.publicacion_id = :id AND publicaciones.tipo_id = tipos.tipo_id";
	$parametros = array();
	$parametros[0] = array("id", $id, "int");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
		$post = $conn->restantesRegistros();
		$smarty->assign("post", $post[0]);

		$sql = "SELECT COUNT(*) cantidad FROM comentarios WHERE publicacion_id = :id";
    	$parametros = array(); 
    	$parametros[0] = array("id", $id, "int");

	    //Ejecuto la consulta con los parámetros
	    $result = $conn->consulta($sql, $parametros);   
	    $fila = $conn->siguienteRegistro();
	    $cantidadComentarios = $fila['cantidad'];

	    $smarty->assign("cantidadComentarios", $cantidadComentarios);

	    if ($cantidadComentarios > 0) {
	    	$sql = "SELECT comentarios.*, usuarios.nombreUsr, usuarios.apellido
					FROM comentarios, publicaciones, usuarios
					WHERE comentarios.publicacion_id = :id AND comentarios.publicacion_id = publicaciones.publicacion_id AND comentarios.usuario_id = usuarios.usuario_id
					ORDER BY comentarios.fecha DESC";
			$parametros = array();
			$parametros[0] = array("id", $id, "int");
			$result = $conn->consulta($sql, $parametros);
			if ($result) {
				$comments = $conn->restantesRegistros();
				$smarty->assign("comments", $comments);
			}
		}

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
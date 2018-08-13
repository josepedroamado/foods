<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$pagina = (int)$_POST['pagina'];
$id = $_SESSION['id'];

if($pagina <= 0){
    $pagina = 1;
}

$respuesta = array("status"=>"OK", "data"=>array(), "ultima" => 0);

if($conn){
    $sql = "SELECT COUNT(*) cantidad FROM favoritos WHERE usuario_id = :id";
    $parametros = array(); 
    $parametros[0] = array("id", $id, "int");

    //Ejecuto la consulta con los parámetros
    $result = $conn->consulta($sql, $parametros);   
    $fila = $conn->siguienteRegistro();

    $ultima = ceil($fila['cantidad']/CANTXPAG);

    //Armo la SQL y paso los parámetros
    $sql = "SELECT favoritos.*, publicaciones.*, categorias.nombreCat, usuarios.nombreUsr, usuarios.apellido, tipos.nombreTipo
            FROM favoritos, publicaciones, categorias, usuarios, tipos
            WHERE favoritos.usuario_id = :id AND publicaciones.eliminado = 0 AND favoritos.publicacion_id = publicaciones.publicacion_id AND favoritos.usuario_id = usuarios.usuario_id AND publicaciones.tipo_id = tipos.tipo_id AND publicaciones.categoria_id = categorias.categoria_id
             ORDER BY fecha ASC";
    $sql .= " LIMIT " . (($pagina * CANTXPAG)-CANTXPAG) . "," . CANTXPAG;

    $parametros = array();
    $parametros[0] = array("id", $id, "int");
    
    //Ejecuto la consulta con los parámetros
    $result = $conn->consulta($sql, $parametros);
    if($result){
        $favs = $conn->restantesRegistros();
        $respuesta["data"] = $favs;
        $respuesta["ultima"] = $ultima;
    }
    else{
        $respuesta = array("status"=>"ERROR", "data"=>array(), "ultima" => 0);        
    }
}
else{
    $respuesta = array("status"=>"ERROR", "data"=>array(), "ultima" => 0);    
}

echo json_encode($respuesta);
?>
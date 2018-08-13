<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$pagina = (int)$_POST['pagina'];
if($pagina <= 0){
    $pagina = 1;
}

$respuesta = array("status"=>"OK", "data"=>array(), "ultima" => 0);

if($conn){
    $sql = "SELECT COUNT(*) cantidad FROM categorias";
    $parametros = array(); 

    //Ejecuto la consulta con los parámetros
    $result = $conn->consulta($sql, $parametros);   
    $fila = $conn->siguienteRegistro();

    $ultima = ceil($fila['cantidad']/CANTXPAG);

    //Armo la SQL y paso los parámetros
    $sql = "SELECT * FROM categorias WHERE eliminado = 0";
    $sql .= " LIMIT " . (($pagina * CANTXPAG)-CANTXPAG) . "," . CANTXPAG;

    $parametros = array();
    
    //Ejecuto la consulta con los parámetros
    $result = $conn->consulta($sql, $parametros);
    if($result){
        $cats = $conn->restantesRegistros();
        $respuesta["data"] = $cats;
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

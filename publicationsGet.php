<?php

session_start();

//Include library
require_once('includes/connectDB.php');

$cat = (int)$_POST['cat'];
$type = (int)$_POST['type'];

$pagina = (int)$_POST['pagina'];
if($pagina <= 0){
    $pagina = 1;
}

$respuesta = array("status"=>"OK", "data"=>array(), "ultima" => 0);

if($conn){
    $sql = "SELECT COUNT(*) cantidad FROM publicaciones WHERE 1";
    if ($cat != NULL) {
        $sql .= " AND publicaciones.categoria_id = " . $cat;
    }
    if ($type != NULL) {
        $sql .= " AND publicaciones.tipo_id = " . $type;
    }
    $parametros = array(); 

    //Ejecuto la consulta con los parámetros
    $result = $conn->consulta($sql, $parametros);   
    $fila = $conn->siguienteRegistro();

    $ultima = ceil($fila['cantidad']/CANTXPAG);

    //Armo la SQL y paso los parámetros
    $sql = "SELECT publicaciones.*, categorias.nombreCat, usuarios.nombreUsr, usuarios.apellido, tipos.nombreTipo
            FROM publicaciones, categorias, usuarios, tipos
            WHERE publicaciones.eliminado = 0 AND publicaciones.usuario_id = usuarios.usuario_id AND publicaciones.tipo_id = tipos.tipo_id AND publicaciones.categoria_id = categorias.categoria_id";
    if ($cat != NULL) {
        $sql .= " AND publicaciones.categoria_id = " . $cat;
    }
    if ($type != NULL) {
        $sql .= " AND publicaciones.tipo_id = " . $type;
    }
    $sql .= " ORDER BY fecha DESC";
    $sql .= " LIMIT " . (($pagina * CANTXPAG)-CANTXPAG) . "," . CANTXPAG;

    $parametros = array();
    
    //Ejecuto la consulta con los parámetros
    $result = $conn->consulta($sql, $parametros);
    if($result){
        $pubs = $conn->restantesRegistros();
        $respuesta["data"] = $pubs;
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

// //Consulto por publicaciones de tipo receta
// if ($conn) {
//     $sql = "SELECT publicaciones.*, categorias.nombreCat, usuarios.nombreUsr, usuarios.apellido
// 		FROM publicaciones, categorias, usuarios
// 		WHERE publicaciones.eliminado = 0 AND publicaciones.usuario_id = usuarios.usuario_id AND publicaciones.categoria_id = categorias.categoria_id
// 		ORDER BY fecha ASC";
//     $parametros = array();
//     $result = $conn->consulta($sql, $parametros);
//     if ($result) {
//         $recipies = $conn->restantesRegistros();
//         $smarty->assign("recipies", $recipies);
//     } else {
//         echo "Error de consulta";
//     }
// } else {
//     echo "Error de conexión: " . $conn->ultimoError();
// }

?>

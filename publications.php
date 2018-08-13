<?php

session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

//Consulto por tipos
if ($conn) {
    $sql = "SELECT * FROM tipos";
    $parametros = array();
    $result = $conn->consulta($sql, $parametros);
    if ($result) {
        $types = $conn->restantesRegistros();
        $smarty->assign("types", $types);
    }
    else{
        echo "Error de consulta";
    }
}
else{
    echo "Error de conexión: " . $conn->ultimoError();
}

//Consulto por publicaciones
if ($conn) {
    $sql = "SELECT * FROM categorias";
    $parametros = array();
    $result = $conn->consulta($sql, $parametros);
    if ($result) {
        $cats = $conn->restantesRegistros();
        $smarty->assign("cats", $cats);
    }
    else{
        echo "Error de consulta";
    }
}
else{
    echo "Error de conexión: " . $conn->ultimoError();
}
//Send result to client
$smarty->display('publications.tpl');

?>

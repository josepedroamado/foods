<?php

session_start();

//Include library
require_once('includes/smartyAndNavbar.php');
require_once('includes/connectDB.php');

if (!$_SESSION['logged']) {
    $_SESSION['error'] = "Debe ingresar para acceder a las publicaciones.";
    header("Location: login.php");
}
else{
    //Consulto por publicaciones de tipo receta
    if ($conn) {
        $sql = "SELECT publicaciones.*, categorias.nombreCat, usuarios.nombreUsr, usuarios.apellido
			FROM publicaciones, categorias, usuarios
			WHERE publicaciones.eliminado = 0 AND publicaciones.usuario_id = usuarios.usuario_id AND publicaciones.categoria_id = categorias.categoria_id
			ORDER BY fecha ASC";
        $parametros = array();
        $result = $conn->consulta($sql, $parametros);
        if ($result) {
            $recipies = $conn->restantesRegistros();
            $smarty->assign("recipies", $recipies);
        } else {
            echo "Error de consulta";
        }
    } else {
        echo "Error de conexión: " . $conn->ultimoError();
    }

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
}
?>

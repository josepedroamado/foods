<?php
session_start();

//Includes
require_once('includes/connectDB.php');

$user = $_POST['userInput'];
$clave = $_POST['passwordInput'];

if ($conn) {
	$sql = "SELECT * FROM usuarios WHERE email = :user AND password = md5(:clave)";
	$parametros = array();
	$parametros[0] = array("user", $user, "string");
	$parametros[1] = array("clave", $clave, "string");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
			$usr = $conn->siguienteRegistro();
		    if($usr != false) {
		        $_SESSION['id'] = $usr['usuario_id'];
		        $_SESSION['firstName'] = $usr['nombreUsr'];
		        $_SESSION['lastName'] = $usr['apellido'];
		        $_SESSION['logged'] = true;
				$_SESSION['mail'] = $user;
				$_SESSION['admin'] = $usr['administrador'];	
	    		setcookie("user", $user, time()+2592000);
	    		header("Location: index.php");        
		    }
		    else{
		    	$_SESSION['logged'] = false;
   				$_SESSION['error'] = "Usuario y contraseña incorrectos";
    			header("Location: login.php");
		    }	
	}
	else{
		echo "Error de consulta: " . $conn->ultimoError();
	}
}
else{
	echo "Error de conexión: " . $conn->ultimoError();
}
?>

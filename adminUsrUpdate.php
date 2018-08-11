<?php
session_start();

//Include library
require_once('includes/connectDB.php');

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mail = $_POST['mailInput'];
$clave = $_POST['passwordInput'];
$admin = $_POST['admin'];

//Checkeo exista en la base
if ($conn) {
	$sql = "SELECT * FROM usuarios WHERE email = :mail AND eliminado = 0";
	$parametros = array();
	$parametros[0] = array("mail", $mail, "string");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
		$usr = $conn->siguienteRegistro();
		if($usr == false) {
			$_SESSION['error'] = "El usuario seleccionado no existe. Por favor registralo.";
			header('Location: signup.php');
		}
		else{
			//Modificar usuario en la base de datos
			$sql = "UPDATE usuarios
					SET nombreUsr= :firstName, apellido= :lastName, email= :mail, password= md5(:clave), administrador= :admin 
					WHERE usuario_id = :id";
			$parametros = array();
			$parametros[0] = array("firstName", $firstName, "string");
			$parametros[1] = array("lastName", $lastName, "string");
			$parametros[2] = array("mail", $mail, "string");
			$parametros[3] = array("clave", $clave, "string");
			$parametros[4] = array("admin", $admin, "int");
			$parametros[5] = array("id", $id, "int");
			$result = $conn->consulta($sql, $parametros);
			if ($result) {
				header('Location: adminUsr.php');
			}
			else{
				echo "Error de consulta" . $conn->ultimoError();
			}
		}
	}
	else{
		echo "Error de consulta" . $conn->ultimoError();
	}
}
else{
	echo "Error de conexión: " . $conn->ultimoError();
}
?>

<?php
session_start();

//Includes
require_once('includes/connectDB.php');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mail = $_POST['mailInput'];
$clave = $_POST['passwordInput'];

//Checkeo no exista en la base
if ($conn) {
	$sql = "SELECT * FROM usuarios WHERE email = :mail";
	$parametros = array();
	$parametros[0] = array("mail", $mail, "string");
	$result = $conn->consulta($sql, $parametros);
	if ($result) {
		$usr = $conn->siguienteRegistro();
		if($usr != false) {
			$_SESSION['error'] = "El correo elegido ya está registrado. Por favor ingrese un correo distinto.";
			header('Location: signup.php');
		}
		else{
			//Agregar usuario a base de datos
			$sql = "INSERT INTO usuarios(nombreUsr, apellido, email, password) VALUES (:firstName, :lastName, :mail, md5(:clave))";
			$parametros = array();
			$parametros[0] = array("firstName", $firstName, "string");
			$parametros[1] = array("lastName", $lastName, "string");
			$parametros[2] = array("mail", $mail, "string");
			$parametros[3] = array("clave", $clave, "string");
			$result = $conn->consulta($sql, $parametros);
			if ($result) {
				header('Location: login.php');
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

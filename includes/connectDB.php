<?php
//Include library
require_once('includes/class.Conexion.BD.php');
require_once('config/configure.php');

//Creo conexion con base de datos
$conn = new ConexionBD(MOTOR, SERVER, DB, USER, PASSWORD);
$conn->conectar();

?>


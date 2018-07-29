<?php
session_start();

$user = $_POST['nameInput'];
$mail = $_POST['mailInput'];
$password = $_POST['passwordInput'];

//agregar a base de datos
header("Location: login.php");
?>

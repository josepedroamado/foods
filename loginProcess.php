<?php
session_start();

$user = $_POST['userInput'];
$password = $_POST['passwordInput'];

if($user == "admin" && $password == "1234"){
    $_SESSION['logged'] = true;
    header("Location: index.php");
}
else{
    $_SESSION['logged'] = false;
    $_SESSION['error'] = "Usuario y contraseña incorrectos";
    header("Location: login.php");
}
?>

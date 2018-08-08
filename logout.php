<?php
session_start();

$_SESSION['logged'] = false;
unset($_SESSION['usuario_id']);
unset($_SESSION['user']);
unset($_SESSION['admin']);

header("Location: index.php");

?>

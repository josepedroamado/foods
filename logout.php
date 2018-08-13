<?php
session_start();

$_SESSION['logged'] = false;
unset($_SESSION['firstName']);
unset($_SESSION['lastName']);
unset($_SESSION['mail']);
unset($_SESSION['id']);
unset($_SESSION['user']);
unset($_SESSION['admin']);

header("Location: index.php");

?>

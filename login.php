<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');

if ($_SESSION['logged']) {
	header('Location: index.php');
}

//Execute logic 
$smarty->assign("user", $_COOKIE['user']);
$smarty->assign("error", $_SESSION['error']);


//Send result to client
$smarty->display('login.tpl');

unset($_SESSION['error']);

?>

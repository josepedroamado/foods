<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');

//Execute logic 
$smarty->assign("error", $_SESSION['error']);

//Send result to client
$smarty->display('signup.tpl');

unset($_SESSION['error']);

?>
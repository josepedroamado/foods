<?php
session_start();

//Include library
require_once('includes/smartyAndNavbar.php');

//Send result to client
$smarty->display('adminUsr.tpl');
?>

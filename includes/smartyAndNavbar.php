<?php
//Include library
require_once('includes/libs/Smarty.class.php');

//Create instance
$smarty = new Smarty();

//Config smarty folders
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

//Execute logic 
$fullName = $_SESSION['firstName'] . " " . $_SESSION['lastName'];

$smarty->assign("logged", $_SESSION['logged']);
$smarty->assign("fullName", $fullName);
$smarty->assign("admin", $_SESSION['admin']);

?>


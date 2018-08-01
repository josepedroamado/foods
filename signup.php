<?php
//Include library
require_once('libs/Smarty.class.php');

//Create instance
$smarty = new Smarty();

//Config smarty folders
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

//Execute logic 

//Send result to client
$smarty->display('signup.tpl');

?>
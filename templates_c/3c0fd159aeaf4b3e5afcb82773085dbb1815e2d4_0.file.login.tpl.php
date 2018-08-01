<?php
/* Smarty version 3.1.32, created on 2018-07-31 22:43:34
  from '/var/www/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b60e6162e89f9_81560859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c0fd159aeaf4b3e5afcb82773085dbb1815e2d4' => 
    array (
      0 => '/var/www/templates/login.tpl',
      1 => 1533076633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b60e6162e89f9_81560859 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Iniciar Sesión</title>
    </head>
    <body>
        <h1>Iniciar Sesión en el Blog</h1>
         <form method="POST" action="loginProcess.php">
            Usuario: 
            <input type="text" id="userInput" name="userInput" value=""/>
            <br/>
            Contraseña:
            <input type="password" id="passwordInput" name="passwordInput" value=""/>
            <br/>
            <input type="submit" value="Ingresar al Blog"/>
        </form>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    </body>
</html><?php }
}

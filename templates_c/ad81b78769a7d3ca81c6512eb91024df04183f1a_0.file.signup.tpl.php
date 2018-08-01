<?php
/* Smarty version 3.1.32, created on 2018-07-31 23:11:25
  from '/var/www/templates/signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b60ec9db53c65_39492885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad81b78769a7d3ca81c6512eb91024df04183f1a' => 
    array (
      0 => '/var/www/templates/signup.tpl',
      1 => 1533078601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b60ec9db53c65_39492885 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Registro en el Blog</title>
    </head>
    <body>
        <h1>Formulario de Registro en el Blog</h1>
        <div name = "form">
            <form method="POST" action="signupProcess.php" id="form">
                Nombre Completo: 
                <input type="text" id="name" name="name" value=""/>
                <span id="name_error"></span>
                <br/>
                Correo:
                <input type="text" id="txtCorreo" name="txtCorreo" value=""/>
                <span id="err_txtCorreo"></span>
                <br/>
                Contraseña:
                <input type="password" id="password" name="password" value=""/>
                <span id="password_error"></span>
                <br/>
                <input type="button" value="Registrarse" id="signup_btn"/>
                <input type="reset" value="Cancelar" id="cancel_btn"/>
            </form>
        </div>
    </body>
</html><?php }
}

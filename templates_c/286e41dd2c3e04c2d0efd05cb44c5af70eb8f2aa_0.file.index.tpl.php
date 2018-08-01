<?php
/* Smarty version 3.1.32, created on 2018-07-31 22:54:00
  from '/var/www/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b60e88841a9e1_28516298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '286e41dd2c3e04c2d0efd05cb44c5af70eb8f2aa' => 
    array (
      0 => '/var/www/templates/index.tpl',
      1 => 1532905301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b60e88841a9e1_28516298 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página Principal</title>
    </head>
    <body>
        <h1>Blog Cocina</h1>
        <div name = "lastRecipies">
            <h2><a href="recipies.php">Últimas Publicaciones de Recetas</a></h2>
            Cards
        </div>

        <div name = "lastNotes">
            <h2><a href="notes.php">Últimas Notas</a></h2>
            Cards
        </div>

        <div name = "footer">
            <a href="signup.php">Registarse</a>
            <a href="login.php">Iniciar Sesión</a>
        </div>
    </body>
</html>
<?php }
}

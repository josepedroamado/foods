<?php
/* Smarty version 3.1.32, created on 2018-08-06 00:04:13
  from '/var/www/templates/autores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b67907d720027_13572089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95cfad9d12944533f3bd8cf4da35bc7fe54e4d38' => 
    array (
      0 => '/var/www/templates/autores.tpl',
      1 => 1533513388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b67907d720027_13572089 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
       <h1>Listado de Autores</h1>
       <input type="button" id="btnAgregar" value="Nuevo Autor" class="blue btn">
       <br>
       <table class="table table-striped">
           <tr class="blue white-text">
               <th scope="col">Autor</th>
               <th scope="col">Especialidad</th>
               <th scope="col">Foto</th>
               <th scope="col">Acciones</th>
           </tr>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['autor']->value['nombre'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['autor']->value['especialidad'];?>
</td>
              <td><img src="fotosautores/<?php echo $_smarty_tpl->tpl_vars['autor']->value['foto'];?>
" width="50px"></td>
              <td>
                <input type="button" value="Borrar" class="btn blue btnBorrar" alt="<?php echo $_smarty_tpl->tpl_vars['autor']->value['id'];?>
">
                <input type="button" value="Modificar" class="btn blue btnModificar" alt="<?php echo $_smarty_tpl->tpl_vars['autor']->value['id'];?>
">
              </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       </table> 

      <!-- SCRIPTS -->
      <!-- JQuery -->
      <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
      <!-- Bootstrap tooltips -->
      <?php echo '<script'; ?>
 type="text/javascript" src="js/popper.min.js"><?php echo '</script'; ?>
>
      <!-- Bootstrap core JavaScript -->
      <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <!-- MDB core JavaScript -->
      <?php echo '<script'; ?>
 type="text/javascript" src="js/mdb.min.js"><?php echo '</script'; ?>
>
      <!-- MYSCript -->
      <?php echo '<script'; ?>
 type="text/javascript" src="js/autores.js"><?php echo '</script'; ?>
>      
    </body>
</html><?php }
}

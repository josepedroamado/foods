<?php
/* Smarty version 3.1.32, created on 2018-08-06 16:52:49
  from '/var/www/templates/adminPub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b687ce12ff286_68368625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d676ca5c0953d04abedefd1d5386b15097f498e' => 
    array (
      0 => '/var/www/templates/adminPub.tpl',
      1 => 1533574359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b687ce12ff286_68368625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/includes/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/var/www/includes/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administración de Publicaciones</title>
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
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="container pt-5 my-5">
            <div class="row">
                <div class="col-8">
                    <h1>Listado de Publicaciones</h1>
                </div>
                <div class="col-4 text-md-right my-auto">
                    <input type="button" name="btnAddPub" id="btnAddPub" value="Nueva Publicación" class="btn indigo darken-4 btn-sm m-0">
                </div>
                <br>
            </div>
            <table class="table table-striped table-hover table-responsive-md btn-table shadow">
                <tr class="indigo darken-4 white-text">
                    <th scope="col">Título</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Acciones</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubs']->value, 'pub');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pub']->value) {
?>
                    <tr>
                        <td><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['pub']->value['titulo'], 'UTF-8'));?>
</td>
                        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pub']->value['texto'],150);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pub']->value['fecha'];?>
</td>
                        <td><img src="img/<?php echo $_smarty_tpl->tpl_vars['pub']->value['imagen'];?>
" width="100px"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pub']->value['nombreCat'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pub']->value['nombreTipo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pub']->value['nombreUsr'];?>
 <?php echo $_smarty_tpl->tpl_vars['pub']->value['apellido'];?>
</td>
                        <td>
                            <input type="button" value="Borrar" class="btn indigo darken-4 btn-sm m-0 btnDeletePub" alt="<?php echo $_smarty_tpl->tpl_vars['pub']->value['publicacion_id'];?>
">
                            <input type="button" value="Modificar" class="btn indigo darken-4 btn-sm m-0 btnModifPub" alt="<?php echo $_smarty_tpl->tpl_vars['pub']->value['publicacion_id'];?>
">
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>       
        </div>

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
        <!-- admin -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/admin.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
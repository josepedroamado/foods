<?php
/* Smarty version 3.1.32, created on 2018-08-12 21:48:45
  from '/var/www/templates/adminPub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b70ab3d6cb526_71084179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d676ca5c0953d04abedefd1d5386b15097f498e' => 
    array (
      0 => '/var/www/templates/adminPub.tpl',
      1 => 1534110523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b70ab3d6cb526_71084179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/includes/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/var/www/includes/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administración de Publicaciones</title>
        <link rel="icon" type="image/ico" href="img/pizza.ico">
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
    <body class="bg grey lighten-3">
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <section class="pt-5 mt-1 px-5 mx-5">
            <div class="container pt-4 my-5 px-4 shadow white">
                <div class="row">
                    <div class="col-8">
                        <h2 class="h1-responsive font-weight-bold text-left my-0">Listado de Publicaciones</h2>
                    </div>
                    <div class="col-4 text-md-right my-auto">
                        <a href="adminPubNew.php" name="btnAddPub" id="btnAddPub" class="btn indigo darken-4 btn-sm m-0 nohover">Nueva Publicación</a>
                    </div>
                    <br>
                </div>
                <hr>
                <div class="row">
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
" width="100px" class="view overlay rounded z-depth-1-half mb-lg-0 mb-4"></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pub']->value['nombreCat'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pub']->value['nombreTipo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pub']->value['nombreUsr'];?>
 <?php echo $_smarty_tpl->tpl_vars['pub']->value['apellido'];?>
</td>
                                <td>
                                    <form method="GET" action="adminPubDel.php">
                                      <input type="text" id="id" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pub']->value['publicacion_id'];?>
" hidden>
                                      <input type="submit" name="Eliminar" class="py-1 my-1 btn indigo darken-4 btn-sm m-0 btnDeletePub" value="Eliminar">
                                    </form>
                                    <form method="GET" action="adminPubMod.php">
                                      <input type="text" id="id" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pub']->value['publicacion_id'];?>
" hidden>
                                       <input type="submit" name="Modificar" class="py-1 my-1 btn indigo darken-4 btn-sm m-0 btnModifPub" value="Modificar">
                                    </form>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>       
                </div>
            </div>
        </section>

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

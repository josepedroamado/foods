<?php
/* Smarty version 3.1.32, created on 2018-08-12 21:48:25
  from '/var/www/templates/adminUsr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b70ab290cc0e2_16065870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc6ea38f90f41dc1a90bda7b8511b11ef6420cdf' => 
    array (
      0 => '/var/www/templates/adminUsr.tpl',
      1 => 1534110494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b70ab290cc0e2_16065870 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administración de Usuarios</title>
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
            <div class="container pt-3 my-5 pb-2 shadow white">
                <div class="row">
                    <div class="col-8">
                        <h2 class="h1-responsive font-weight-bold text-left my-0">Listado de Usuarios</h2>
                    </div>
                    <div class="col-4 text-md-right my-auto">
                        <a type="button" name="btnAddUsr" id="btnAddUsr" href="signup.php" class="btn indigo darken-4 btn-sm m-0 nohover">Nuevo Usuario</a>
                    </div>
                    <br>
                </div>
                <hr>
                <table class="table table-striped table-hover table-responsive-md btn-table shadow">
                    <tr class="indigo darken-4 white-text">
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Administrador</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usrs']->value, 'usr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usr']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['usr']->value['nombreUsr'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['usr']->value['apellido'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['usr']->value['email'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['usr']->value['administrador'] == 1) {?>
                                    Si
                                <?php } else { ?>
                                    No
                                <?php }?>
                            </td>
                            <td>
                                <form method="GET" action="adminUsrDel.php">
                                    <input type="text" id="id" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value['usuario_id'];?>
" hidden>
                                    <input type="submit" name="Eliminar" class="py-1 my-1 btn indigo darken-4 btn-sm m-0" value="Eliminar">
                                </form>

                                <form method="GET" action="adminUsrMod.php">
                                    <input type="text" id="id" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value['usuario_id'];?>
" hidden>
                                    <input type="submit" name="Modificar" class="py-1 my-1 btn indigo darken-4 btn-sm m-0" value="Modificar">
                                </form>
                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>       
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
    </body>
</html><?php }
}

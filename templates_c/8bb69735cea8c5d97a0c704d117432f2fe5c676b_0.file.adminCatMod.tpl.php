<?php
/* Smarty version 3.1.32, created on 2018-08-13 01:05:38
  from '/var/www/templates/adminCatMod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b70d962db79b9_42708604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bb69735cea8c5d97a0c704d117432f2fe5c676b' => 
    array (
      0 => '/var/www/templates/adminCatMod.tpl',
      1 => 1534122333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b70d962db79b9_42708604 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificación de Categoría</title>
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

        <!-- JQuery -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>

    </head>
    <body class="bg grey lighten-3">
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!--  Form  -->
        <section class="pt-5 mt-1 px-5 mx-5">
            <div class="container pt-5 my-2">
                <!--Row-->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card mx-xl-5">
                            <!-- Card body -->
                            <div class="card-body">
                                <!--Form-->
                                <form method="POST" action="adminCatUpdate.php">
                                    <!--Titulo pagina-->
                                    <h2 class="h1-responsive font-weight-bold text-left my-0">Modificación de Categoría</h2>
                                    <hr>
                                    <!-- ID Categoria-->
                                    <input type="text" id="id" name="id" class="form-control mb-4" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria_id'];?>
" hidden>
                                    <!-- Nombre Categoria -->
                                    <input type="text" id="nombreCat" name="nombreCat" class="form-control mb-4" placeholder="Nombre Cateogría" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['nombreCat'];?>
" required>
                                    
                                    <div class="text-center py-4 mt-3">
                                        <a class="btn indigo darken-4 btn-sm m-0 nohover" href="adminCat.php">Cancelar</a>
                                        <button class="btn indigo darken-4 btn-sm m-0" type="submit">Modificar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
        <!-- Form -->

        <!-- SCRIPTS -->
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

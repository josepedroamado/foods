<?php
/* Smarty version 3.1.32, created on 2018-08-12 23:05:54
  from '/var/www/templates/adminUsr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b70bd52068156_01791973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc6ea38f90f41dc1a90bda7b8511b11ef6420cdf' => 
    array (
      0 => '/var/www/templates/adminUsr.tpl',
      1 => 1534115152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b70bd52068156_01791973 (Smarty_Internal_Template $_smarty_tpl) {
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

        <!-- JQuery -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
        <!-- JQuery -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/adminUsr.js"><?php echo '</script'; ?>
>
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
                    <tbody id="usrTableBody">
                    </tbody>

                                    </table> 

                <!--Pagination-->
                <div class="row container justify-content-center my-auto">
                    <input type='button' class='btn btn-primary btn-sm p-0 indigo darken-4' id='btnFirst' alt='1' value='<<'>
                    <input type='button' class='btn btn-primary btn-sm py-0 px-1 indigo darken-4' id='btnPrev' alt='' value='<'>
                    <span id="currentPage" class="mt-2">0</span><span class="mt-2"> / </span><span id="lastPage" class="mt-2">0</span>
                    <input type='button' class='btn btn-primary btn-sm py-0 px-1 indigo darken-4' id='btnNext' alt='' value='>'>
                    <input type='button' class='btn btn-primary btn-sm p-0 indigo darken-4' id='btnLast' alt='' value='>>'>
                </div>  
            </div>
        </section>

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

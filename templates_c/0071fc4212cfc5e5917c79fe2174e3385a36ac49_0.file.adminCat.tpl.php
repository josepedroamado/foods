<?php
/* Smarty version 3.1.32, created on 2018-08-13 19:31:43
  from '/var/www/templates/adminCat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71dc9fb2fa52_05036536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0071fc4212cfc5e5917c79fe2174e3385a36ac49' => 
    array (
      0 => '/var/www/templates/adminCat.tpl',
      1 => 1534132150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b71dc9fb2fa52_05036536 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administración de Categorías</title>
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
        <!-- adminCat -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/adminCat.js"><?php echo '</script'; ?>
>
    </head>
    <body class="bg grey lighten-3">
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <section class="pt-5 mt-1 px-5 mx-5">
            <div class="container pt-3 my-5 pb-2 shadow white">
                <form method="POST" action="adminCatAdd.php">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="h1-responsive font-weight-bold text-left my-0">Listado de Categorías</h2>
                        </div> 
                        <div class="col-4 text-md-right my-auto">       
                            <input type="text" name="nombreCat" placeholder="Nombre Nueva Categoría" class="form-control md-4" required>
                        </div>
                        <div class="col-2 my-auto">
                            <input type="submit" value="NUEVA CATEGORÍA" name="btnAddCat" id="btnAddCat" class="btn btn-sm indigo darken-4 m-1 py-1 px-2">
                        </div>  
                        <br>
                    </div>
                    <hr>
                </form>
                <table class="table table-striped table-hover table-responsive-md btn-table shadow">
                    <tr class="indigo darken-4 white-text">
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    <tbody id="tableBody">
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

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['errorCat']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
            <?php echo '<script'; ?>
 type="text/javascript">
                alert("Categoría ya registrada, ingrese una distinta");
            <?php echo '</script'; ?>
>
        <?php }?>
    </body>
</html><?php }
}

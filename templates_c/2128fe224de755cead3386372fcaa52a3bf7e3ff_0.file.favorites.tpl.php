<?php
/* Smarty version 3.1.32, created on 2018-08-13 14:27:41
  from '/var/www/templates/favorites.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71955d5b3b87_76435311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2128fe224de755cead3386372fcaa52a3bf7e3ff' => 
    array (
      0 => '/var/www/templates/favorites.tpl',
      1 => 1534141870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b71955d5b3b87_76435311 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Favoritos</title>
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
        <!-- favorites -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/favorites.js"><?php echo '</script'; ?>
>
    </head>
    <body class="bg grey lighten-3">
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <section class="pt-5 mt-1 px-5 mx-5">
            <div class="container pt-4 my-5 px-4 shadow white">
                <div class="pl-1">
                    <h2 class="h1-responsive font-weight-bold text-left my-0">Favoritos</h2>
                </div>
                <hr>
                <div id="favoritos">
                                    </div>
                
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
</html>
<?php }
}

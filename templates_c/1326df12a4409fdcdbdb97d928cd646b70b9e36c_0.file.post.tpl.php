<?php
/* Smarty version 3.1.32, created on 2018-08-10 17:47:42
  from '/var/www/templates/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6dcfbe669847_88418253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1326df12a4409fdcdbdb97d928cd646b70b9e36c' => 
    array (
      0 => '/var/www/templates/post.tpl',
      1 => 1533923225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b6dcfbe669847_88418253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/includes/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['post']->value['titulo'], 'UTF-8'));?>
</title>
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

          <!-- Section: Recipies -->
          <div name = "lastRecipies" class="pt-5 mt-5 px-5 mx-5">
            <!-- Section: Blog v.3 -->
            <section class="pt-2 mx-1 px-1">
              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-2"></div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-8 px-5 pt-5 shadow white">
                  <!-- Category -->
                  <a href="#!" class="pink-text">
                    <h6 class="font-weight-bold mb-3">
                      <i class="fa fa-map pr-2"></i>
                      <?php echo $_smarty_tpl->tpl_vars['post']->value['nombreCat'];?>

                    </h6>
                  </a>
                  <!-- Post title -->
                  <h3 class="font-weight-bold mb-3"><strong><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['post']->value['titulo'], 'UTF-8'));?>
</strong></h3>
                  <!-- Featured image -->
                  <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                    <img class="img-fluid" src="img/<?php echo $_smarty_tpl->tpl_vars['post']->value['imagen'];?>
">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Excerpt -->
                  <p class="mt-5 dark-grey-text text-justify"><?php echo $_smarty_tpl->tpl_vars['post']->value['texto'];?>
</p>
                  <!-- Post data -->
                  <p>escrito por <a class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['post']->value['nombreUsr'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['apellido'];?>
</a>, <?php echo $_smarty_tpl->tpl_vars['post']->value['fecha'];?>
</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </section>
            <!-- Section: Blog v.3 -->    
          </div>
          <!--./Section: Recipies-->

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

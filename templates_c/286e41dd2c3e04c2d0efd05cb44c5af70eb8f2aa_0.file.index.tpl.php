<?php
/* Smarty version 3.1.32, created on 2018-08-08 01:53:16
  from '/var/www/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6a4d0cad0ce6_79932322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '286e41dd2c3e04c2d0efd05cb44c5af70eb8f2aa' => 
    array (
      0 => '/var/www/templates/index.tpl',
      1 => 1533693189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b6a4d0cad0ce6_79932322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/includes/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/var/www/includes/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página Principal</title>
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
            <section class="mx-5 px-5 pt-1 shadow white">
              <!-- Section heading -->
              <h2 class="h1-responsive font-weight-bold text-center my-5"><a href="recipies.php">Últimas Publicaciones de Recetas</a></h2>
              
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recipies']->value, 'recipie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['recipie']->value) {
?> 
                <!-- Grid row -->
                <div class="row">
                  <!-- Grid column -->
                  <div class="col-lg-5 col-xl-4">
                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                      <img class="img-fluid" src="img/<?php echo $_smarty_tpl->tpl_vars['recipie']->value['imagen'];?>
">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-7 col-xl-8">
                    <!-- Category -->
                    <a href="#!" class="pink-text">
                      <h6 class="font-weight-bold mb-3">
                        <i class="fa fa-map pr-2"></i>
                        <?php echo $_smarty_tpl->tpl_vars['recipie']->value['nombreCat'];?>

                      </h6>
                    </a>
                    <!-- Post title -->
                    <h3 class="font-weight-bold mb-3"><strong><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['recipie']->value['titulo'], 'UTF-8'));?>
</strong></h3>
                    <!-- Excerpt -->
                    <p class="dark-grey-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['recipie']->value['texto'],150);?>
</p>
                    <!-- Post data -->
                    <p>escrito por <a class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['recipie']->value['nombreUsr'];?>
 <?php echo $_smarty_tpl->tpl_vars['recipie']->value['apellido'];?>
</a>, <?php echo $_smarty_tpl->tpl_vars['recipie']->value['fecha'];?>
</p>
                    <!-- Read more button -->
                    <form method="GET" action="post.php">
                      <input type="text" id="id" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['recipie']->value['publicacion_id'];?>
" hidden>
                      <input type="submit" class="btn btn-primary btn-md" name="submit" value="Leer más!">
                    </form>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <hr class="my-5">
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </section>
            <!-- Section: Blog v.3 -->    
          </div>
          <!--./Section: Recipies-->

          <!-- Section: Notes-->
          <div name = "lastNotes" class="pt-5 px-5 mx-5">
            <!-- Section: Blog v.3 -->
            <section class="mx-5 px-5 pt-1 shadow white">
              <!-- Section heading -->
              <h2 class="h1-responsive font-weight-bold text-center my-5"><a href="recipies.php">Últimas Notas</a></h2>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'note');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
?> 
                <!-- Grid row -->
                <div class="row">
                  <!-- Grid column -->
                  <div class="col-lg-5 col-xl-4">
                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                      <img class="img-fluid" src="img/<?php echo $_smarty_tpl->tpl_vars['note']->value['imagen'];?>
">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-7 col-xl-8">
                    <!-- Category -->
                    <a href="#!" class="pink-text">
                      <h6 class="font-weight-bold mb-3">
                        <i class="fa fa-map pr-2"></i>
                        <?php echo $_smarty_tpl->tpl_vars['note']->value['nombreCat'];?>

                      </h6>
                    </a>
                    <!-- Post title -->
                    <h3 class="font-weight-bold mb-3"><strong><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['note']->value['titulo'], 'UTF-8'));?>
</strong></h3>
                    <!-- Excerpt -->
                    <p class="dark-grey-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['note']->value['texto'],150);?>
</p>
                    <!-- Post data -->
                    <p>escrito por <a class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['note']->value['nombreUsr'];?>
 <?php echo $_smarty_tpl->tpl_vars['note']->value['apellido'];?>
</a>, <?php echo $_smarty_tpl->tpl_vars['note']->value['fecha'];?>
</p>
                    <!-- Read more button -->
                    <form method="GET" action="post.php">
                      <input type="text" id="id" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['note']->value['publicacion_id'];?>
" hidden>
                      <input type="submit" class="btn btn-primary btn-md" name="submit" value="Leer más!">
                    </form>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <hr class="my-5">
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </section>
            <!-- Section: Blog v.3 -->
          </div>
          <!--./Section: Notes-->

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

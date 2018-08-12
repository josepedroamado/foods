<?php
/* Smarty version 3.1.32, created on 2018-08-12 21:36:40
  from '/var/www/templates/publications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b70a868ba7263_03023839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '057922e80b5ea7819205e0751b1cf1d088e03905' => 
    array (
      0 => '/var/www/templates/publications.tpl',
      1 => 1534109798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b70a868ba7263_03023839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/includes/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/var/www/includes/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recetas</title>
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
        <?php echo '<script'; ?>
 type="text/javascript" src="js/publications.js"><?php echo '</script'; ?>
>
    </head>
    <body class="bg grey lighten-3">
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Publicaciones -->
        <div name = "publications" class="pt-5 mt-5 px-5 mx-5">
            <!-- Pagina -->
            <section class="mx-5 px-5 pt-1 shadow white">
                <!-- Cabezal -->
                <div class="container row pt-5 my-0">
                    <!-- Titulo Pagina -->
                    <div class="col-4">
                        <h2 class="h1-responsive font-weight-bold text-left my-0">Publicaciones</h2>
                    </div>
                </div>
                <hr>
                <!-- Controles-->
                <div class="row">
                    <!-- Select Tipo -->
                    <div class="col-4 my-auto">
                        <label class="font-weight-light ml-3">Tipo</label>
                        <select name="type" id="type" class="browser-default ml-3" required>
                            <option value="" disabled selected>Seleccionar una opción</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['tipo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['nombreTipo'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}
                        </select>
                    </div>
                    <!-- Select Categoria -->
                    <div class="col-4 my-auto">
                        <label class="font-weight-light ml-3">Categoría</label>
                        <select name="cat" id="cat" class="browser-default ml-3" required>
                            <option value="" disabled selected>Seleccionar una opción</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nombreCat'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}
                        </select>
                    </div>
                    <!--Botones-->
                    <div class="col-4 my-auto">
                        <!-- Boton Buscar -->
                        <button type="submit" id="btnBuscarPublicacion" class="btn btn-primary btn-md indigo darken-4 m-1">Buscar</button>
                        <!-- Boton Limpiar -->
                        <button type="submit" id="btnVaciarFiltroPublicacion" class="btn btn-primary btn-md indigo darken-4 m-1">Limpiar</button>
                    </div>
                    <!--./Botones-->
                </div>
                <!--./Controles-->
                <hr>
                <!--./Cabezal -->

                <!-- Cuerpo publicaciones-->
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
                            <div class="">
                                <img class="img-fluid view overlay rounded z-depth-1-half mb-lg-0 mb-4" src="img/<?php echo $_smarty_tpl->tpl_vars['recipie']->value['imagen'];?>
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
                            <a class="pink-text">
                                <h6 class="font-weight-bold mb-3">
                                    <i class="
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['recipie']->value['tipo_id'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
                                            fa fa-cutlery
                                        <?php } else { ?>
                                            fa fa-sticky-note
                                        <?php }?>
                                        pr-2">        
                                    </i>
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
                                <input type="submit" class="btn btn-primary btn-md p-2" name="submit" value="Leer más!">
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
                <!--./Cuerpo publicaciones-->
            </section>
            <!-- Pagina -->    
        </div>
        <!--./Publicaciones-->

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

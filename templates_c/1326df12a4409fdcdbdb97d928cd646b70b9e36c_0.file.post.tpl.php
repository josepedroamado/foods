<?php
/* Smarty version 3.1.32, created on 2018-08-13 17:22:16
  from '/var/www/templates/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71be48e26245_18363837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1326df12a4409fdcdbdb97d928cd646b70b9e36c' => 
    array (
      0 => '/var/www/templates/post.tpl',
      1 => 1534180919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b71be48e26245_18363837 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!-- JQuery -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    </head>
    <body class="bg grey lighten-3">
          <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <!-- Section: Recipies -->
          <div name = "post" class="pt-5 mt-5 px-5 mx-5">
            <!-- Section: Blog v.3 -->
            <section class="pt-2 mx-1 px-1">
              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-2"></div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-8 px-5 pt-5 pb-5 mb-5 shadow white">
                  <div class="row">
                    <div class="col-9 my-auto">
                      <!-- Category -->
                      <a href="#!" class="pink-text">
                        <h6 class="font-weight-bold mb-3">
                          <i class="
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['post']->value['tipo_id'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
                                fa fa-cutlery
                            <?php } else { ?>
                                fa fa-sticky-note
                            <?php }?>
                                pr-2"> 
                          </i>
                          <?php echo $_smarty_tpl->tpl_vars['post']->value['nombreTipo'];?>
 - 
                          <?php echo $_smarty_tpl->tpl_vars['post']->value['nombreCat'];?>

                        </h6>
                      </a>
                    </div>
                    <div class="col-2">
                      <?php ob_start();
echo $_smarty_tpl->tpl_vars['logged']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
                        <form method='POST' action='favoritesAdd.php'>
                          <input type='text' id='id' name='id' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['post']->value['publicacion_id'];?>
" hidden> 
                          <input type='submit' class='btn btn-primary btn-md p-0' name='submit' value='Agregar a favoritos'>
                        </form> 
                      <?php }?>
                    </div>
                  </div>
                  <!-- Post title -->
                  <h3 class="font-weight-bold mb-3 mt-2"><strong><?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['post']->value['titulo'], 'UTF-8'));?>
</strong></h3>
                  <!-- Featured image -->
                  <div class="">
                    <img class="img-fluid view overlay rounded z-depth-1-half mb-lg-0 mb-4" src="img/<?php echo $_smarty_tpl->tpl_vars['post']->value['imagen'];?>
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

                  <hr>
                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['cantidadComentarios']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 0) {?>
                    <p>No hay comentarios</p>
                  <?php } else { ?>
                    
                    <!--Section: Comments-->
                    <section class="my-5">
                      <!-- Card header -->
                      <div class="card-header border-0 font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['cantidadComentarios']->value;?>
 comentarios</div>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                        <div class="media d-block d-md-flex mt-4">
                          <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="font-weight-bold mt-0">
                              <p class=""><?php echo $_smarty_tpl->tpl_vars['comment']->value['nombreUsr'];?>
 <?php echo $_smarty_tpl->tpl_vars['comment']->value['apellido'];?>
</p>
                            </h5>
                            <?php echo $_smarty_tpl->tpl_vars['comment']->value['detalle'];?>


                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['comment']->value['respuesta'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 != '') {?>
                              <div class="media d-block d-md-flex mt-4">
                                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                  <h5 class="font-weight-bold mt-0">
                                    <p class=""><?php echo $_smarty_tpl->tpl_vars['post']->value['nombreUsr'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['apellido'];?>
</p>
                                  </h5>
                                  <?php echo $_smarty_tpl->tpl_vars['comment']->value['respuesta'];?>

                                </div>
                              </div>
                            <?php } else { ?>
                              <?php ob_start();
echo $_smarty_tpl->tpl_vars['usuario_id']->value;
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['post']->value['usuario_id'];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable5 == $_prefixVariable6) {?>
                                <!-- Reply -->
                                <form class="" method="POST" action="postCommentAddReply.php">
                                  <textarea class="md-textarea form-control" id="reply" name="reply" rows="3" placeholder="Ingresa tu respuesta" required></textarea>

                                  <div class="text-center my-4">
                                    <input type="text" id="post_id" name="post_id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['publicacion_id'];?>
" hidden>
                                    <input type="text" id="comment_id" name="comment_id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comentario_id'];?>
" hidden>
                                    <button class="btn btn-default btn-sm btn-rounded indigo darken-4" type="submit">Responder</button>
                                  </div>
                                </form>
                              <?php }?>
                            <?php }?>
                          </div>
                        </div>
                        <hr>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </section>
                    <!--Section: Comments-->   
                  <?php }?>

                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['logged']->value;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7) {?>
                    <!-- Comentario -->
                    <form class="" method="POST" action="postCommentAdd.php">
                      <textarea class="md-textarea form-control" id="comment" name="comment" rows="3" placeholder="Ingresa tu comentario" required></textarea>
                      <input type="text" id="post_id" name="post_id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['publicacion_id'];?>
" hidden>
                      <input type="text" id="user_id" name="user_id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario_id']->value;?>
" hidden>

                      <div class="text-center my-4">
                        <button class="btn btn-default btn-sm btn-rounded indigo darken-4" type="submit">Comentar</button>
                      </div>
                    </form>
                  <?php } else { ?>
                    <div class="text-center my-auto">
                      <p>
                        <a href="login.php" class="btn btn-default btn-sm btn-rounded indigo darken-4 nohover">Inicia sesion</a>
                        
                        <a href="signup.php" class="btn btn-default btn-sm btn-rounded indigo darken-4 nohover">regístrate</a>
                        Para poder Comentar en la publicación!
                      </p>
                    </div>
                  <?php }?>
                                    <!--Pagination -->
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </section>
            <!-- Section: Blog v.3 -->    
          </div>
          <!--./Section: Recipies-->

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

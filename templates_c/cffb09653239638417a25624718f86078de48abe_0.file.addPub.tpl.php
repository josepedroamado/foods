<?php
/* Smarty version 3.1.32, created on 2018-08-10 17:50:14
  from '/var/www/templates/addPub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6dd0569bdb37_13958351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cffb09653239638417a25624718f86078de48abe' => 
    array (
      0 => '/var/www/templates/addPub.tpl',
      1 => 1533923410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b6dd0569bdb37_13958351 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Publicación</title>
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
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- Default form register -->
        <div class="container pt-5 my-5">
            <!--Row-->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card mx-xl-5">
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Material form register -->
                            <form method="POST" action="newPub.php">
                                <p class="h4 text-center py-4">Nueva Publicación</p>
                                <!-- Material input text -->
                                <input type="text" id="titlePub" name="titlePub" class="form-control mb-4" placeholder="Título" required>
                                <div class="row border rounded mx-1 py-2">
                                    <div class="col-3">
                                        <label class="font-weight-light">Tipo</label>
                                        <select name="type" id="type" class="browser-default">
                                            <option value="1" selected>Receta</option>
                                            <option value="2">Nota</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-4">
                                        <label class="font-weight-light">Categoría</label>
                                        <select name="cat" id="cat" class="browser-default">
                                            <option value="1" selected>Op1</option>
                                            <option value="2">Op2</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row border rounded mx-1 py-2">
                                    <div class="col-4">
                                        <label for="pictureInput" class="font-weight-light">Foto de la publicación</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="file" name="pictureInput" id="pictureInput">
                                    </div>
                                </div>
                                <br>
                                <!--Textarea with icon prefix-->
                                <textarea type="text" id="form10" class="md-textarea form-control" rows="10" placeholder="Cuerpo de la publicación"></textarea>

                                <div class="text-center py-4 mt-3">
                                    <button class="btn btn-cyan waves-effect waves-light" type="cancel">Cancelar</button>
                                    <button class="btn btn-cyan waves-effect waves-light" type="submit">Registrarse</button>
                                </div>

                                <div class="red-text text-center">
                                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                </div>
                            </form>
                            <!-- Material form register -->
                        </div>
                        <!-- Card body -->
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <!-- Default form register -->

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

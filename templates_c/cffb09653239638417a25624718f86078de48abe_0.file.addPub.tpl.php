<?php
/* Smarty version 3.1.32, created on 2018-08-06 17:01:28
  from '/var/www/templates/addPub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b687ee8eee8c2_04741105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cffb09653239638417a25624718f86078de48abe' => 
    array (
      0 => '/var/www/templates/addPub.tpl',
      1 => 1533574887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b687ee8eee8c2_04741105 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administración de Publicaciones</title>
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
                            <form method="POST" action="signupProcess.php">
                                <p class="h4 text-center py-4">Registrarse</p>
                                <!-- Material input text -->
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="firstName" name="firstName" class="form-control" required>
                                    <label for="firstName" class="font-weight-light">Tu nombre</label>
                                </div>

                                <!-- Material input text -->
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="lastName" name="lastName" class="form-control" required>
                                    <label for="lastName" class="font-weight-light">Tu apellido</label>
                                </div>

                                <!-- Material input email -->
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" id="mailInput" name="mailInput" class="form-control" required>
                                    <label for="mailInput" class="font-weight-light">Tu e-mail</label>
                                    <span id="err_txtCorreo"></span>
                                </div>

                                <!-- Material input password -->
                                <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    
                                        <input type="password" id="passwordInput" name="passwordInput" class="form-control" minlength="8" pattern="(?=.*\d)(?=.*[a-z]).{8,}"  title="La contraseña debe tener por lo menos 8 caracteres, 1 letra y 1 número" required>
                                    
                                    <label for="passwordInput" class="font-weight-light">Tu contraseña</label>
                                    <p class="text-center"><p>
                                    <span id="password_error"></span>
                                </div>

                                <div class="text-center py-4 mt-3">
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

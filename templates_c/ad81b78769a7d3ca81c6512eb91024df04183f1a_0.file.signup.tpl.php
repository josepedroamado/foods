<?php
/* Smarty version 3.1.32, created on 2018-08-13 16:34:15
  from '/var/www/templates/signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71b3073432b6_53444079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad81b78769a7d3ca81c6512eb91024df04183f1a' => 
    array (
      0 => '/var/www/templates/signup.tpl',
      1 => 1534002969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b71b3073432b6_53444079 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrarse en el Blog</title>
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
        <div class="bg-sign">     
            <!-- Default form register -->
            <div class="container">
                <!--Row-->
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 col-xl-5 mb-4 my-xl-5">
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
                    <div class="col-md-3"></div>
                </div>
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
    </body>
</html><?php }
}

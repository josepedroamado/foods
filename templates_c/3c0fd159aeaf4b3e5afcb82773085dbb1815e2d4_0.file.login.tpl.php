<?php
/* Smarty version 3.1.32, created on 2018-08-05 23:34:03
  from '/var/www/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b67896bbd3a97_40884831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c0fd159aeaf4b3e5afcb82773085dbb1815e2d4' => 
    array (
      0 => '/var/www/templates/login.tpl',
      1 => 1533512042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b67896bbd3a97_40884831 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Iniciar Sesión en el Blog</title>
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
        <!-- Default form login -->
        <div class="container">
            <!--Row-->
            <div class="row">
    		    <div class="col-md-3"></div>
    		    <div class="col-md-6 col-xl-5 mb-4 my-xl-5">
                    <div class="card mx-xl-5">
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Material form register -->
                            <form method="POST" action="loginProcess.php">

                                <p class="h4 text-center py-4">Iniciar Sesión</p>

                                <!-- Material input email -->
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="email" id="userInput" name="userInput" class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
>         
                                    <label for="userInput" class="font-weight-light">Tu e-mail</label>
                                </div>

                                <!-- Material input password -->
                                <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" id="passwordInput" name="passwordInput" class="form-control">
                                    <label for="passwordInput" class="font-weight-light">Tu contraseña</label>
                                </div>

                                <div class="text-center py-4 mt-3">
                                    <button class="btn btn-cyan waves-effect waves-light" type="submit">Ingresar</button>
                                </div>
                                <!-- Register -->
                                <p class="text-center">No tienes usuario?
                                    <a href="signup.php">Registrarse</a>
                                </p>

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
		<!-- Default form login -->

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

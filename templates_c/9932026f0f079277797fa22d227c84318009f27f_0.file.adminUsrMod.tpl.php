<?php
/* Smarty version 3.1.32, created on 2018-08-12 21:57:47
  from '/var/www/templates/adminUsrMod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b70ad5b3f8d50_69277604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9932026f0f079277797fa22d227c84318009f27f' => 
    array (
      0 => '/var/www/templates/adminUsrMod.tpl',
      1 => 1534111065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b70ad5b3f8d50_69277604 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificación de Usuario</title>
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
        <!--  Form  -->
        <section class="pt-5 mt-1 px-5 mx-5">
            <div class="container pt-5 my-2">
                <!--Row-->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card mx-xl-5">
                            <!-- Card body -->
                            <div class="card-body">
                                <!--Form-->
                                <form method="POST" action="adminUsrUpdate.php">
                                    <!--Titulo pagina-->
                                    <h2 class="h1-responsive font-weight-bold text-left my-0">Modificación de Usuario</h2>
                                    <hr>
                                    <!-- ID Usuario-->
                                    <input type="text" id="id" name="id" class="form-control mb-4" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value['usuario_id'];?>
" hidden>
                                    <!-- Nombre -->
                                    <input type="text" id="firstName" name="firstName" class="form-control mb-4" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value['nombreUsr'];?>
" required>
                                    <!-- Apellido -->
                                    <input type="text" id="lastName" name="lastName" class="form-control mb-4" placeholder="Apellido" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value['apellido'];?>
" required>
                                    <!-- Email -->
                                    <input type="email" id="mailInput" name="mailInput" class="form-control mb-4" value="<?php echo $_smarty_tpl->tpl_vars['usr']->value['email'];?>
" required>
                                    <!-- Contraseña -->
                                    
                                        <input type="password" id="passwordInput" name="passwordInput" class="form-control mb-4" minlength="8" pattern="(?=.*\d)(?=.*[a-z]).{8,}"  title="La contraseña debe tener por lo menos 8 caracteres, 1 letra y 1 número" placeholder="Nueva Contraseña" required>
                                    

                                    <div class="container row border rounded mx-1 py-2">
                                        <div class="col-3">
                                            <label for="admin" class="font-weight-light">Administrador</label>
                                        </div>
                                        <div class="col-1">
                                            <input type="checkbox" name="admin" id="admin" value="1"
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['usr']->value['administrador'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
                                                checked 
                                            <?php }?>>
                                        </div>  
                                    </div>

                                    <div class="text-center py-4 mt-3">
                                        <a class="btn indigo darken-4 btn-sm m-0 nohover" href="adminUsr.php">Cancelar</a>
                                        <button class="btn indigo darken-4 btn-sm m-0" type="submit">Modificar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
        <!-- Form -->

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

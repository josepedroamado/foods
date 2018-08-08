<?php
/* Smarty version 3.1.32, created on 2018-08-05 21:16:56
  from '/var/www/templates/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6769487dc7e4_46336020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74a548fd5f23a7317db7a297374a393971f63bd1' => 
    array (
      0 => '/var/www/templates/navbar.tpl',
      1 => 1533503486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6769487dc7e4_46336020 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Navbar-->
<nav class="mb-1 navbar fixed-top scrolling-navbar navbar-expand-lg navbar-dark primary-color indigo darken-4">
    <a class="navbar-brand font-weight-bold ml-5" href="index.php">Blog Cocina</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="recipies.php">Recetas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="notes.php">Notas</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="favorites.php">Favoritos</a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="admin.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="adminCat.php">Categorias</a>
                        <a class="dropdown-item" href="adminPub.php">Publicaciones</a>
                        <a class="dropdown-item" href="adminUsr.php">Usuarios</a>
                    </div>
                </li>
            <?php }?>

        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-user"></i>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>

                    <?php } else { ?>
                        Mi cuenta
                    <?php }?>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                    <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
                        <a class="dropdown-item waves-effect waves-light" href="login.php">Iniciar Sesión</a>
                        <a class="dropdown-item waves-effect waves-light" href="signup.php">Registrarse</a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                        <a class="dropdown-item waves-effect waves-light" href="logout.php">Cerrar Sesión</a>
                    <?php }?>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar--><?php }
}

<!--Navbar-->
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
            {if $logged}
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="favorites.php">Favoritos</a>
                </li>
            {/if}
            {if $admin}
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="admin.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="adminCat.php">Categorias</a>
                        <a class="dropdown-item" href="adminPub.php">Publicaciones</a>
                        <a class="dropdown-item" href="adminUsr.php">Usuarios</a>
                    </div>
                </li>
            {/if}

        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-user"></i>
                    {if $logged}
                        {$fullName}
                    {else}
                        Mi cuenta
                    {/if}
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                    {if !$logged}
                        <a class="dropdown-item waves-effect waves-light" href="login.php">Iniciar Sesión</a>
                        <a class="dropdown-item waves-effect waves-light" href="signup.php">Registrarse</a>
                    {/if}
                    {if $logged}
                        <a class="dropdown-item waves-effect waves-light" href="logout.php">Cerrar Sesión</a>
                    {/if}
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar-->
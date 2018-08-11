<!DOCTYPE html>
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
    <body>
        {include file="navbar.tpl"}
        <!--  Form  -->
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
                                <p class="h4 text-center py-4">Modificación de Usuario</p>
                                <!-- ID Usuario-->
                                <input type="text" id="id" name="id" class="form-control mb-4" value="{$usr['usuario_id']}" hidden>
                                <!-- Nombre -->
                                <input type="text" id="firstName" name="firstName" class="form-control mb-4" placeholder="Nombre" value="{$usr['nombreUsr']}" required>
                                <!-- Apellido -->
                                <input type="text" id="lastName" name="lastName" class="form-control mb-4" placeholder="Apellido" value="{$usr['apellido']}" required>
                                <!-- Email -->
                                <input type="email" id="mailInput" name="mailInput" class="form-control mb-4" value="{$usr['email']}" required>
                                <!-- Contraseña -->
                                {literal}
                                    <input type="password" id="passwordInput" name="passwordInput" class="form-control mb-4" minlength="8" pattern="(?=.*\d)(?=.*[a-z]).{8,}"  title="La contraseña debe tener por lo menos 8 caracteres, 1 letra y 1 número" placeholder="Nueva Contraseña" required>
                                {/literal}

                                <div class="container row border rounded mx-1 py-2">
                                    <div class="col-3">
                                        <label for="admin" class="font-weight-light">Administrador</label>
                                    </div>
                                    <div class="col-1">
                                        <input type="checkbox" name="admin" id="admin" value="1"
                                        {if {$usr['administrador']} == 1}
                                            checked 
                                        {/if}>
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
        <!-- Form -->

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- admin -->
        <script type="text/javascript" src="js/admin.js"></script>
    </body>
</html>
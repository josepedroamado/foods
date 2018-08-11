<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administración de Publicaciones</title>
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
                                    {literal}
                                        <input type="password" id="passwordInput" name="passwordInput" class="form-control" minlength="8" pattern="(?=.*\d)(?=.*[a-z]).{8,}"  title="La contraseña debe tener por lo menos 8 caracteres, 1 letra y 1 número" required>
                                    {/literal}
                                    <label for="passwordInput" class="font-weight-light">Tu contraseña</label>
                                    <p class="text-center"><p>
                                    <span id="password_error"></span>
                                </div>

                                <div class="text-center py-4 mt-3">
                                    <button class="btn btn-cyan waves-effect waves-light" type="submit">Registrarse</button>
                                </div>

                                <div class="red-text text-center">
                                    {$error}
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
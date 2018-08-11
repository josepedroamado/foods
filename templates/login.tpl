<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Iniciar Sesión en el Blog</title>
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
                                    <input type="email" id="userInput" name="userInput" class="form-control" value={$user}>         
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
                                    {$error}
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
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>
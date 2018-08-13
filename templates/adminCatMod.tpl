<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificación de Categoría</title>
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

        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    </head>
    <body class="bg grey lighten-3">
        {include file="navbar.tpl"}
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
                                <form method="POST" action="adminCatUpdate.php">
                                    <!--Titulo pagina-->
                                    <h2 class="h1-responsive font-weight-bold text-left my-0">Modificación de Categoría</h2>
                                    <hr>
                                    <!-- ID Categoria-->
                                    <input type="text" id="id" name="id" class="form-control mb-4" value="{$cat['categoria_id']}" hidden>
                                    <!-- Nombre Categoria -->
                                    <input type="text" id="nombreCat" name="nombreCat" class="form-control mb-4" placeholder="Nombre Cateogría" value="{$cat['nombreCat']}" required>
                                    
                                    <div class="text-center py-4 mt-3">
                                        <a class="btn indigo darken-4 btn-sm m-0 nohover" href="adminCat.php">Cancelar</a>
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
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>
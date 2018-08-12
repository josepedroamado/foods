<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administración de Usuarios</title>
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
        {include file="navbar.tpl"}
        <section class="pt-5 mt-1 px-5 mx-5">
            <div class="container pt-3 my-5 pb-2 shadow white">
                <form method="POST" action="adminCatAdd.php">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="h1-responsive font-weight-bold text-left my-0">Listado de Categorías</h2>
                        </div> 
                        <div class="col-4 text-md-right my-auto">       
                            <input type="text" name="nombreCat" placeholder="Nombre Nueva Categoría" class="form-control md-4" required>
                        </div>
                        <div class="col-2 my-auto">
                            <input type="submit" value="NUEVA CATEGORÍA" name="btnAddCat" id="btnAddCat" class="btn btn-sm indigo darken-4 m-1 py-1 px-2">
                        </div>  
                        <br>
                    </div>
                    <hr>
                </form>
                <table class="table table-striped table-hover table-responsive-md btn-table shadow">
                    <tr class="indigo darken-4 white-text">
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    {foreach from=$cats item=cat}
                        <tr>
                            <td>{$cat['nombreCat']}</td>
                            <td>
                                <form method="POST" action="adminCatDel.php">
                                    <input type="text" id="id" name="id" class="form-control" value="{$cat['categoria_id']}" hidden>
                                    <input type="submit" value="Borrar" class="btn indigo darken-4 btn-sm m-1">
                                </form>
                                <form method="POST" action="adminCatMod.php">
                                    <input type="text" id="id" name="id" class="form-control" value="{$cat['categoria_id']}" hidden>
                                    <input type="submit" value="Modificar" class="btn indigo darken-4 btn-sm m-1">
                                </form>
                            </td>
                        </tr>
                    {/foreach}
                </table>       
            </div>
        </section>

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

        {if {$errorCat} == 1}
            <script type="text/javascript">
                alert("Categoría ya registrada, ingrese una distinta");
            </script>
        {/if}
    </body>
</html>
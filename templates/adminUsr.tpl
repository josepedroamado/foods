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

        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <!-- JQuery -->
        <script type="text/javascript" src="js/adminUsr.js"></script>
    </head>
    <body class="bg grey lighten-3">
        {include file="navbar.tpl"}
        <section class="pt-5 mt-1 px-5 mx-5">
            <div class="container pt-3 my-5 pb-2 shadow white">
                <div class="row">
                    <div class="col-8">
                        <h2 class="h1-responsive font-weight-bold text-left my-0">Listado de Usuarios</h2>
                    </div>
                    <div class="col-4 text-md-right my-auto">
                        <a type="button" name="btnAddUsr" id="btnAddUsr" href="signup.php" class="btn indigo darken-4 btn-sm m-0 nohover">Nuevo Usuario</a>
                    </div>
                    <br>
                </div>
                <hr>
                <table class="table table-striped table-hover table-responsive-md btn-table shadow">
                    <tr class="indigo darken-4 white-text">
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Administrador</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    <tbody id="usrTableBody">
                    </tbody>

                    {* {foreach from=$usrs item=usr}
                        <tr>
                            <td>{$usr['nombreUsr']}</td>
                            <td>{$usr['apellido']}</td>
                            <td>{$usr['email']}</td>
                            <td>
                                {if $usr['administrador'] == 1}
                                    Si
                                {else}
                                    No
                                {/if}
                            </td>
                            <td>
                                <form method="GET" action="adminUsrDel.php">
                                    <input type="text" id="id" name="id" class="form-control" value="{$usr['usuario_id']}" hidden>
                                    <input type="submit" name="Eliminar" class="py-1 my-1 btn indigo darken-4 btn-sm m-0" value="Eliminar">
                                </form>

                                <form method="GET" action="adminUsrMod.php">
                                    <input type="text" id="id" name="id" class="form-control" value="{$usr['usuario_id']}" hidden>
                                    <input type="submit" name="Modificar" class="py-1 my-1 btn indigo darken-4 btn-sm m-0" value="Modificar">
                                </form>
                            </td>
                        </tr>
                    {/foreach} *}
                </table> 

                <!--Pagination-->
                <div class="row container justify-content-center my-auto">
                    <input type='button' class='btn btn-primary btn-sm p-0 indigo darken-4' id='btnFirst' alt='1' value='<<'>
                    <input type='button' class='btn btn-primary btn-sm py-0 px-1 indigo darken-4' id='btnPrev' alt='' value='<'>
                    <span id="currentPage" class="mt-2">0</span><span class="mt-2"> / </span><span id="lastPage" class="mt-2">0</span>
                    <input type='button' class='btn btn-primary btn-sm py-0 px-1 indigo darken-4' id='btnNext' alt='' value='>'>
                    <input type='button' class='btn btn-primary btn-sm p-0 indigo darken-4' id='btnLast' alt='' value='>>'>
                </div>  
            </div>
        </section>

        <!-- SCRIPTS -->
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>
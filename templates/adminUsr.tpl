<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administración de Usuarios</title>
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

        <div class="container pt-5 my-5">
            <div class="row">
                <div class="col-8">
                    <h1>Listado de Usuarios</h1>
                </div>
                <div class="col-4 text-md-right my-auto">
                    <input type="button" name="btnAddUsr" id="btnAddUsr" value="Nuevo Usuario" class="btn indigo darken-4 btn-sm m-0">
                </div>
                <br>
            </div>
            <table class="table table-striped table-hover table-responsive-md btn-table shadow">
                <tr class="indigo darken-4 white-text">
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Administrador</th>
                    <th scope="col">Acciones</th>
                </tr>
                {foreach from=$usrs item=usr}
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
                            <input type="button" value="Borrar" class="btn indigo darken-4 btn-sm m-0 btnDelUsr" alt="{$usr['usuario_id']}">
                            <input type="button" value="Modificar" class="btn indigo darken-4 btn-sm m-0 btnModUsr" alt="{$usr['usuario_id']}">
                        </td>
                    </tr>
                {/foreach}
            </table>       
        </div>

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- admin-->
        <script type="text/javascript" src="js/admin.js"></script>
    </body>
</html>
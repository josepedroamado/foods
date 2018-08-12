<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recetas</title>
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
        <script type="text/javascript" src="js/publications.js"></script>
    </head>
    <body class="bg grey lighten-3">
        {include file="navbar.tpl"}

        <!-- Publicaciones -->
        <div name = "publications" class="pt-5 mt-5 px-5 mx-5">
            <!-- Pagina -->
            <section class="mx-5 px-5 pt-1 shadow white">
                <!-- Cabezal -->
                <div class="container row pt-5 my-0">
                    <!-- Titulo Pagina -->
                    <div class="col-4">
                        <h2 class="h1-responsive font-weight-bold text-left my-0">Publicaciones</h2>
                    </div>
                </div>
                <hr>
                <!-- Controles-->
                <div class="row">
                    <!-- Select Tipo -->
                    <div class="col-4 my-auto">
                        <label class="font-weight-light ml-3">Tipo</label>
                        <select name="type" id="type" class="browser-default ml-3" required>
                            <option value="" disabled selected>Seleccionar una opción</option>
                            {foreach from=$types item=$type}
                                <option value="{$type['tipo_id']}">{$type['nombreTipo']}</option>
                            {/foreach}}
                        </select>
                    </div>
                    <!-- Select Categoria -->
                    <div class="col-4 my-auto">
                        <label class="font-weight-light ml-3">Categoría</label>
                        <select name="cat" id="cat" class="browser-default ml-3" required>
                            <option value="" disabled selected>Seleccionar una opción</option>
                            {foreach from=$cats item=$cat}
                                <option value="{$cat['categoria_id']}">{$cat['nombreCat']}</option>
                            {/foreach}}
                        </select>
                    </div>
                    <!--Botones-->
                    <div class="col-4 my-auto">
                        <!-- Boton Buscar -->
                        <button type="submit" id="btnBuscarPublicacion" class="btn btn-primary btn-md indigo darken-4 m-1">Buscar</button>
                        <!-- Boton Limpiar -->
                        <button type="submit" id="btnVaciarFiltroPublicacion" class="btn btn-primary btn-md indigo darken-4 m-1">Limpiar</button>
                    </div>
                    <!--./Botones-->
                </div>
                <!--./Controles-->
                <hr>
                <!--./Cabezal -->

                <!-- Cuerpo publicaciones-->
                {foreach from=$recipies item=recipie} 
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-lg-5 col-xl-4">
                            <!-- Featured image -->
                            <div class="">
                                <img class="img-fluid view overlay rounded z-depth-1-half mb-lg-0 mb-4" src="img/{$recipie['imagen']}">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-7 col-xl-8">
                            <!-- Category -->
                            <a class="pink-text">
                                <h6 class="font-weight-bold mb-3">
                                    <i class="
                                        {if {$recipie['tipo_id']} == 1 }
                                            fa fa-cutlery
                                        {else}
                                            fa fa-sticky-note
                                        {/if}
                                        pr-2">        
                                    </i>
                                    {$recipie['nombreCat']}
                                </h6>
                            </a>
                            <!-- Post title -->
                            <h3 class="font-weight-bold mb-3"><strong>{$recipie['titulo']|lower|capitalize}</strong></h3>
                            <!-- Excerpt -->
                            <p class="dark-grey-text">{$recipie['texto']|truncate:150}</p>
                            <!-- Post data -->
                            <p>escrito por <a class="font-weight-bold">{$recipie['nombreUsr']} {$recipie['apellido']}</a>, {$recipie['fecha']}</p>
                            <!-- Read more button -->
                            <form method="GET" action="post.php">
                                <input type="text" id="id" name="id" class="form-control" value="{$recipie['publicacion_id']}" hidden>
                                <input type="submit" class="btn btn-primary btn-md p-2" name="submit" value="Leer más!">
                            </form>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <hr class="my-5">
                {/foreach}
                <!--./Cuerpo publicaciones-->
            </section>
            <!-- Pagina -->    
        </div>
        <!--./Publicaciones-->

        <!-- SCRIPTS -->
        
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>
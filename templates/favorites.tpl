<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Favoritos</title>
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
        <!-- favorites -->
        <script type="text/javascript" src="js/favorites.js"></script>
    </head>
    <body class="bg grey lighten-3">
        {include file="navbar.tpl"}

        <section class="pt-5 mt-1 px-5 mx-5">
            <div class="container pt-4 my-5 px-4 shadow white">
                <div class="pl-1">
                    <h2 class="h1-responsive font-weight-bold text-left my-0">Favoritos</h2>
                </div>
                <hr>
                <div id="favoritos">
                    {* {foreach from=$favs item=$fav}
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-lg-5 col-xl-4">
                                <!-- Featured image -->
                                <div class="">
                                    <img class="img-fluid view overlay rounded z-depth-1-half mb-lg-0 mb-4" src="img/{$fav['imagen']}">
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
                                            {if {$fav['tipo_id']} == 1 }
                                                fa fa-cutlery
                                            {else}
                                                fa fa-sticky-note
                                            {/if}
                                            pr-2">        
                                        </i>
                                        {$fav['nombreCat']}
                                    </h6>
                                </a>
                                <!-- Post title -->
                                <h3 class="font-weight-bold mb-3"><strong>{$fav['titulo']|lower|capitalize}</strong></h3>
                                <!-- Excerpt -->
                                <p class="dark-grey-text">{$fav['texto']|truncate:150}</p>
                                <!-- Post data -->
                                <p>escrito por <a class="font-weight-bold">{$fav['nombreUsr']} {$fav['apellido']}</a>, {$fav['fecha']}</p>
                                <!-- Read more button -->
                                <div class="row">
                                    <form method="GET" action="post.php">
                                        <input type="text" id="id" name="id" class="form-control" value="{$fav['publicacion_id']}" hidden>
                                        <input type="submit" class="btn btn-primary btn-md p-2" name="submit" value="Leer más!">
                                    </form>
                                    <form method='POST' action='favoriteDel.php'>
                                        <input type='text' id='id' name='id' class='form-control' value="{$fav['publicacion_id']}" hidden>
                                        <input type='submit' class='btn btn-primary btn-md p-2' name='submit' value='Quitar'>
                                    </form>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                        <hr class="my-5">
                            
                    {/foreach} *}
                </div>
                
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

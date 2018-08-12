<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Notas</title>
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



        <!-- Section: Notes-->
        <div name = "lastNotes" class="pt-5 px-5 mx-5">

            

            <!-- Section: Blog v.3 -->
            <section class="mx-5 px-5 pt-1 shadow white">
                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center my-5">
                    <a href="recipies.php">Publicaciones de Notas</a><hr>
                </h2>



                {foreach from=$notes item=note} 
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-lg-5 col-xl-4">
                            <!-- Featured image -->
                            <div class="">
                                <img class="view overlay rounded z-depth-1-half mb-lg-0 mb-4 img-fluid" src="img/{$note['imagen']}">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-7 col-xl-8">
                            <!-- Category -->
                            <a href="#!" class="pink-text">
                                <h6 class="font-weight-bold mb-3">
                                    <i class="fa fa-map pr-2"></i>
                                    {$note['nombreCat']}
                                </h6>
                            </a>
                            <!-- Post title -->
                            <h3 class="font-weight-bold mb-3"><strong>{$note['titulo']|lower|capitalize}</strong></h3>
                            <!-- Excerpt -->
                            <p class="dark-grey-text">{$note['texto']|truncate:150}</p>
                            <!-- Post data -->
                            <p>escrito por <a class="font-weight-bold">{$note['nombreUsr']} {$note['apellido']}</a>, {$note['fecha']}</p>
                            <!-- Read more button -->
                            <form method="GET" action="post.php">
                                <input type="text" id="id" name="id" class="form-control" value="{$note['publicacion_id']}" hidden>
                                <input type="submit" class="btn btn-primary btn-md" name="submit" value="Leer más!">
                            </form>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <hr class="my-5">
                {/foreach}
            </section>
            <!-- Section: Blog v.3 -->
        </div>
        <!--./Section: Notes-->

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

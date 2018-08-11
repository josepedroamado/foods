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
    </head>
    <body>
        {include file="navbar.tpl"}
        <div class="pt-5 my-5">
            <h1>Recetas</h1>
        </div>
        
        <!-- Section: Recipies -->
          <div name = "lastRecipies" class="pt-5 mt-5 px-5 mx-5">
            <!-- Section: Blog v.3 -->
            <section class="mx-5 px-5 pt-1 shadow blue-grey">
              <!-- Section heading -->
              <h2 class="h1-responsive font-weight-bold text-center my-5"><a href="recipies.php">Últimas Publicaciones de Recetas</a></h2>
              
              {foreach from=$recipies item=recipie} 
                <!-- Grid row -->
                <div class="row">
                  <!-- Grid column -->
                  <div class="col-lg-5 col-xl-4">
                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                      <img class="img-fluid" src="img/{$recipie['imagen']}">
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
          <!--./Section: Recipies-->

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
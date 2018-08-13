<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{$post['titulo']|lower|capitalize}</title>
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

          <!-- Section: Recipies -->
          <div name = "post" class="pt-5 mt-5 px-5 mx-5">
            <!-- Section: Blog v.3 -->
            <section class="pt-2 mx-1 px-1">
              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-2"></div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-8 px-5 pt-5 shadow white">
                  <div class="row">
                    <div class="col-9 my-auto">
                      <!-- Category -->
                      <a href="#!" class="pink-text">
                        <h6 class="font-weight-bold mb-3">
                          <i class="
                            {if {$post['tipo_id']} == 1 }
                                fa fa-cutlery
                            {else}
                                fa fa-sticky-note
                            {/if}
                                pr-2"> 
                          </i>
                          {$post['nombreTipo']} - 
                          {$post['nombreCat']}
                        </h6>
                      </a>
                    </div>
                    <div class="col-2">
                      <form method='POST' action='favoriteAdd.php'>
                        <input type='text' id='id' name='id' class='form-control' value="{$post['publicacion_id']}" hidden> 
                        <input type='submit' class='btn btn-primary btn-md p-0' name='submit' value='Agregar a favoritos'>
                      </form> 
                    </div>
                  </div>
                  <!-- Post title -->
                  <h3 class="font-weight-bold mb-3 mt-2"><strong>{$post['titulo']|lower|capitalize}</strong></h3>
                  <!-- Featured image -->
                  <div class="">
                    <img class="img-fluid view overlay rounded z-depth-1-half mb-lg-0 mb-4" src="img/{$post['imagen']}">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Excerpt -->
                  <p class="mt-5 dark-grey-text text-justify">{$post['texto']}</p>
                  <!-- Post data -->
                  <p>escrito por <a class="font-weight-bold">{$post['nombreUsr']} {$post['apellido']}</a>, {$post['fecha']}</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
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
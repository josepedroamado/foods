<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{$post['titulo']|lower|capitalize}</title>
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
          <div name = "lastRecipies" class="pt-5 mt-5 px-5 mx-5">
            <!-- Section: Blog v.3 -->
            <section class="pt-2 mx-1 px-1">
              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-2"></div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-8 px-5 pt-5 shadow white">
                  <!-- Category -->
                  <a href="#!" class="pink-text">
                    <h6 class="font-weight-bold mb-3">
                      <i class="fa fa-map pr-2"></i>
                      {$post['nombreCat']}
                    </h6>
                  </a>
                  <!-- Post title -->
                  <h3 class="font-weight-bold mb-3"><strong>{$post['titulo']|lower|capitalize}</strong></h3>
                  <!-- Featured image -->
                  <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                    <img class="img-fluid" src="img/{$post['imagen']}">
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
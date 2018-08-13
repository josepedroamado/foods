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
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
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
                <div class="col-8 px-5 pt-5 pb-5 mb-5 shadow white">
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
                      {if {$logged}}
                        <form method='POST' action='favoritesAdd.php'>
                          <input type='text' id='id' name='id' class='form-control' value="{$post['publicacion_id']}" hidden> 
                          <input type='submit' class='btn btn-primary btn-md p-0' name='submit' value='Agregar a favoritos'>
                        </form> 
                      {/if}
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

                  <hr>
                  {if {$cantidadComentarios} == 0}
                    <p>No hay comentarios</p>
                  {else}
                    
                    <!--Section: Comments-->
                    <section class="my-5">
                      <!-- Card header -->
                      <div class="card-header border-0 font-weight-bold">{$cantidadComentarios} comentarios</div>
                      {foreach from=$comments item=comment}
                        <div class="media d-block d-md-flex mt-4">
                          <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="font-weight-bold mt-0">
                              <p class="">{$comment['nombreUsr']} {$comment['apellido']}</p>
                            </h5>
                            {$comment['detalle']}

                            {if {$comment['respuesta']} != ""}
                              <div class="media d-block d-md-flex mt-4">
                                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                  <h5 class="font-weight-bold mt-0">
                                    <p class="">{$post['nombreUsr']} {$post['apellido']}</p>
                                  </h5>
                                  {$comment['respuesta']}
                                </div>
                              </div>
                            {else}
                              {if {$usuario_id} == {$post['usuario_id']} }
                                <!-- Reply -->
                                <form class="" method="POST" action="postCommentAddReply.php">
                                  <textarea class="md-textarea form-control" id="reply" name="reply" rows="3" placeholder="Ingresa tu respuesta" required></textarea>

                                  <div class="text-center my-4">
                                    <input type="text" id="post_id" name="post_id" class="form-control" value="{$post['publicacion_id']}" hidden>
                                    <input type="text" id="comment_id" name="comment_id" class="form-control" value="{$comment['comentario_id']}" hidden>
                                    <button class="btn btn-default btn-sm btn-rounded indigo darken-4" type="submit">Responder</button>
                                  </div>
                                </form>
                              {/if}
                            {/if}
                          </div>
                        </div>
                        <hr>
                      {/foreach}
                    </section>
                    <!--Section: Comments-->   
                  {/if}

                  {if {$logged}}
                    <!-- Comentario -->
                    <form class="" method="POST" action="postCommentAdd.php">
                      <textarea class="md-textarea form-control" id="comment" name="comment" rows="3" placeholder="Ingresa tu comentario" required></textarea>
                      <input type="text" id="post_id" name="post_id" class="form-control" value="{$post['publicacion_id']}" hidden>
                      <input type="text" id="user_id" name="user_id" class="form-control" value="{$usuario_id}" hidden>

                      <div class="text-center my-4">
                        <button class="btn btn-default btn-sm btn-rounded indigo darken-4" type="submit">Comentar</button>
                      </div>
                    </form>
                  {else}
                    <div class="text-center my-auto">
                      <p>
                        <a href="login.php" class="btn btn-default btn-sm btn-rounded indigo darken-4 nohover">Inicia sesion</a>
                        
                        <a href="signup.php" class="btn btn-default btn-sm btn-rounded indigo darken-4 nohover">regístrate</a>
                        Para poder Comentar en la publicación!
                      </p>
                    </div>
                  {/if}
                  {* <!--Pagination-->
                  <div class="row container justify-content-center my-auto">
                      <input type='button' class='btn btn-primary btn-sm p-0 indigo darken-4' id='btnFirst' alt='1' value='<<'>
                      <input type='button' class='btn btn-primary btn-sm py-0 px-1 indigo darken-4' id='btnPrev' alt='' value='<'>
                      <span id="currentPage" class="mt-2">0</span><span class="mt-2"> / </span><span id="lastPage" class="mt-2">0</span>
                      <input type='button' class='btn btn-primary btn-sm py-0 px-1 indigo darken-4' id='btnNext' alt='' value='>'>
                      <input type='button' class='btn btn-primary btn-sm p-0 indigo darken-4' id='btnLast' alt='' value='>>'>
                  </div>   *}
                  <!--Pagination -->
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </section>
            <!-- Section: Blog v.3 -->    
          </div>
          <!--./Section: Recipies-->

        <!-- SCRIPTS -->
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>
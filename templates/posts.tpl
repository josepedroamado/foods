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
    <body>
       {include file="navbar.tpl"}
        <!-- Filter -->
            <ul class="nav justify-content-end grey lighten-4 py-4">
                <li class="nav-item">
                    <a class="nav-link active" href="notes.php">Notas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipies.php">Recetas</a>
                </li>
            </ul>
    </body>

</html>
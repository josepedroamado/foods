<?php
session_start();

if(!$_SESSION['logged']){
    $_SESSION['error'] = "Debe ingresar para acceder a las publicaciones.";
    header("Location: login.php");
}
else{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recetas</title>
    </head>
    <body>
        <h1>Recetas</h1>
       
    </body>
</html>
<?php
}
?>

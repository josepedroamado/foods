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
        <title>Notas</title>
    </head>
    <body>
        <h1>Notas</h1>
        
    </body>
</html>
<?php
}
?>

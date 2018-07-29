<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Iniciar Sesión</title>
    </head>
    <body>
        <h1>Iniciar Sesión en el Blog</h1>
         <form method="POST" action="loginProcess.php">
            Usuario: 
            <input type="text" id="userInput" name="userInput" value=""/>
            <br/>
            Contraseña:
            <input type="password" id="passwordInput" name="passwordInput" value=""/>
            <br/>
            <input type="submit" value="Ingresar al Blog"/>
        </form>
        <div>
            <?php
            echo $_SESSION['error'];
            ?>
        </div>
    </body>
</html>
<?php
    unset($_SESSION['error']);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Registro en el Blog</title>
    </head>
    <body>
        <h1>Formulario de Registro en el Blog</h1>
        <div name = "form">
            <form method="POST" action="signupProcess.php" id="form">
                Nombre Completo: 
                <input type="text" id="name" name="name" value=""/>
                <span id="name_error"></span>
                <br/>
                Correo:
                <input type="text" id="txtCorreo" name="txtCorreo" value=""/>
                <span id="err_txtCorreo"></span>
                <br/>
                Contraseña:
                <input type="password" id="password" name="password" value=""/>
                <span id="password_error"></span>
                <br/>
                <input type="button" value="Registrarse" id="signup_btn"/>
                <input type="reset" value="Cancelar" id="cancel_btn"/>
            </form>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>TOX Login</title>
    <meta charset="utf-8">
    <link type="text/css" href="style.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Philosopher:700italic' rel='stylesheet' type='text/css'>
</head>
 
<body>
    <div id="envoltura">
        <div id="contenedor">
            <div id="cabecera" >
                <img src="images/logo.png" height="180">
            </div>
            <div id="cuerpo">
                <form id="form-login" action="" method="post" autocomplete="off">
                    <p1><label >Usuario:</label></p1>
                        <input name="usuario" type="text" id="usuario" placeholder="" autofocus="" required=""></p>
                    <p1><label>Contraseña:</label></p1>
                        <input name="Pass" type="password" id="Pass" placeholder="" required=""></p> 
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
                </form>
            </div>
            <div id="pie">LABORATORIOS TOX</div>
        </div>
    </div>
</body>
</html>

<?php

error_reporting(E_ALL ^ E_NOTICE);

require ("Conexion.php");

$user  = $_POST["usuario"];
$password = $_POST["Pass"];


//if ()


    
    




?>
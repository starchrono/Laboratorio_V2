<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
    <meta charset="utf-8">
    <link type="text/css" href="style2.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Philosopher:700italic' rel='stylesheet' type='text/css'>
</head>
 
<body>
    <div id="envoltura">
        <div id="contenedor"> 
            <div id="cabecera">
                <img src="images/logo.png" height="180" >
            </div> 
            <div id="cuerpo">
				<table>
					<tr>
						<td class="first">
                <form id="form-login"  method="post" autocomplete="off" action="Insert.php">


                    <p1><label for="Nombre">Nombre:</label></p1>
                        <input name="ClienteNombre" type="ClienteNombre" id="ClienteNombre" class="ClienteNombre" placeholder="" autofocus="" required=""></p>
                            
                            
                    <p1><label for="Correo">Correo:</label></p1>
                        <input name="Correo" type="Correo" id="Correo" class="Correo" placeholder="" autofocus="" required=""></p>
                    
					</tr>
				</table>

				
                    <p id="bot"><input name="submit" type="submit" id="boton" value="Guardar" class="boton"/></p>
                   
                    
                </form>
            </div>
 
            <div id="pie">LABORATORIOS TOX</div>
        </div> 
    </div>
<a class='flotante' href='../Laboratorio_V4/menu/menu_Adm.html' ><img src='../Laboratorio_V4/images/boton.png' border="0"/></a>

</body> 
</html>

<?php

error_reporting(E_ALL ^ E_NOTICE);

//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php
require ("Conexion.php");



//Recibimos los parametros enviados mediante POST por el Formulario


$Nombre = $_POST["ClienteNombre"];
$Correo = $_POST["Correo"];

//Invocamos el procedimiento almacenado, incluyendo los valores
//$insertar = mysqli_query($enlace,"call NuevoClientes('$Nombre','$Correo')");
$insertar = mysqli_query($enlace,"call InsertClientes('$Nombre', '$Correo')");


if (!$insertar){echo "Fallo" ;}

//else{echo "Guardado con exito";}

else{ 
    
     $InsertPag = 'Insert_Clientes';
    
    echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}



mysqli_close($enlace);


?>
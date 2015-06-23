<!DOCTYPE html>
<html lang="es">
<head>
    <title>Departamento</title>
    <meta charset="utf-8">
    <link type="text/css" href="style2.css" rel="stylesheet" />
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
				<form id="form-login" method="post" autocomplete="off" action="Insert.php">
                    <p1><label>Nombre del Departamento:</label></p1>
                        <input name="nombre_dpto" type="text" id="nombre_dpto" class="nombre_dpto" placeholder="" autofocus="" required=""></p>
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Guardar" class="boton"></p>
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


//$InsertPag = '0';

//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php
require ("Conexion.php");



//Recibimos los parametros enviados mediante POST por el Formulario


$Nombre = $_POST['nombre_dpto'];



//Invocamos el procedimiento almacenado, incluyendo los valores
$insertar = mysqli_query($enlace,"call InsertDepartamentos('$Nombre')");





if ($insertar){
    
    
    $InsertPag = 'Insert_Departamentos';
    
    echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}



/*else{ echo "<script language='JavaScript'>
                alert('Fallo u.u');
                </script>";}*/




mysqli_close($enlace);



?>
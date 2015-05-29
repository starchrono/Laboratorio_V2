<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nuevo CE</title>
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
				<form id="form-login"  method="post" autocomplete="off" action="Guardar.php">
                    <p1><label>Nombre CE:</label></p1>
                        <input name="nombreCE" type="text" id="nombreCE" class="nombreCE" placeholder="" autofocus="" required=""></p>
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Guardar" class="boton"></p>
                </form>
				</div>
				<div id="pie">LABORATORIOS TOX</div>
			</div>
    </div>
</body>
</html>

<?php

//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php
require ("Conexion.php");



//Recibimos los parametros enviados mediante POST por el Formulario


$Nombre = $_POST["nombreCE"];

//Invocamos el procedimiento almacenado, incluyendo los valores
$insertar = mysqli_query($enlace,"call NuevoCE('$Nombre')");
unset($_POST['nombreCE']);


//if (!$insertar){echo "Fallo" ;}

if ($insertar){echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}

//else{echo "Fallo";}

//else{echo "Guardado con exito";}

/*else{ echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}*/

unset($_POST['nombreCE']);
unset($_POST[$insertar]);


mysqli_close($enlace);


?>


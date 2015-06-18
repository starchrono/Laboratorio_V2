<!DOCTYPE html>
<html>
<head>
    <title>Muestras</title>
    <meta charset="utf-8">
    <link type="text/css" href="style3.css" rel="stylesheet" />
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
                <form id="form-login" action="#" method="post" autocomplete="off">
                    <p1><label for="clienteID">Cliente ID:</label></p1>
                        <input name="clienteID" type="text" id="clienteID" class="clienteID" placeholder="" autofocus="" required=""></p>
                    <p1><label for="supervisorID">Supervisor ID:</label></p1>
                        <input name="supervisorID" type="text" id="supervisorID" class="supervisorID" placeholder="" autofocus="" required=""></p>
                    <p1><label for="fechaR">Fecha de Entrega:</label></p1>
                        <input name="fechaR" type="text" id="fechaR" class="fechaR" placeholder="AAAA-MM-DD" autofocus="" required=""></p>
						</td>

						<td class="second">
                    <p1><label for="tipo">Tipo:</label></p1>
                        <br>
                        <input name="tipo" type="text" id="tipo" class="tipo" placeholder="" autofocus="" required=""></p>
                    <p1><label for="repet">Repeticion:</label></p1>
                        <input name="repet" type="text" id="repet" class="repet" placeholder="" autofocus="" required=""></p>
					<p1><label for="centro">Centro:</label></p1>
                        <input name="centro" type="text" id="centro" class="centro" placeholder="" autofocus="" required=""></p>
					
						</td>
					</tr>
				</table>

					<p id="bot"><input name="submit" type="submit" id="boton" value="Guardar" class="boton"/></p>
                </form>
            </div>
 
            <div id="pie">LABORATORIOS TOX</div>
        </div> 
    </div>
<a class='flotante' href='../Laboratorio_V3/menu/menu_Adm.html' ><img src='../Laboratorio_V3/images/boton.png' border="0"/></a>
</body> 
</html>

<?php

error_reporting(E_ALL ^ E_NOTICE); 

//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php
require ("Conexion.php");



//Recibimos los parametros enviados mediante POST por el Formulario



$ClienteIDM = $_POST["ClienteID"];
$SupervisorID = $_POST["SupervisorID"];
$FechaEntrega = $_POST["FechaEntrega"];
$Tipo = $_POST["Tipo"];
$Repeticion = $_POST["Repeticion"];
$Centro = $_POST["Centro"];


//Invocamos el procedimiento almacenado, incluyendo los valores
$insertar = mysqli_query($enlace,"call InsertMuestras('$ClienteID', '$SupervisorID', '$FechaEntrega', '$Tipo', '$Repeticion', '$Centro')");




//if (!$insertar){echo "Fallo" ;}

if ($insertar){echo "<script language='JavaScript'>
                alert('Se modificó correctamente :D');
                </script>";}

//else{echo "Fallo";}

//else{echo "Guardado con exito";}

/*else{ echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}*/



mysqli_close($enlace);


?>
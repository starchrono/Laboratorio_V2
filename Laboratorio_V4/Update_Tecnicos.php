<!DOCTYPE html>
<html>
<head>
    <title>Tecnicos</title>
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
                <form id="form-login" action="#" method="post" autocomplete="off">

                   

                    <p1><label for="Nombre">Nombre:</label></p1>
                        <input name="NombreTec" type="text" id="NombreTec" class="NombreTec" placeholder="" autofocus="" required=""></p>

                   
                    <p1><label for="Departamento">Departamento:</label></p1>
                        <input name="Dep" type="Dep" id="Dep" class="Dep" placeholder=""autofocus="" required=""></p>
 
                    
						</td>
						<td class="second">
                    	
					
					
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


$Nombre = $_POST["NombreTec"];
$DepartamentoID = $_POST["Dep"];

//Invocamos el procedimiento almacenado, incluyendo los valores
$insertar = mysqli_query($enlace,"call NuevoTec('$Nombre','$DepartamentoID')");



if (!$insertar){echo "Fallo" ;}

//else{echo "Guardado con exito";}

else{ echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}



mysqli_close($enlace);


?>
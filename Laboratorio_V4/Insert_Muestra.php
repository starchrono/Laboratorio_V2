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
                <form id="form-login" action="Insert_Muestra.php" method="post" autocomplete="off">
                    <p1><label for="clienteID">Cliente ID:</label></p1>
                        
                      <?php 

error_reporting(E_ALL ^ E_NOTICE);

require ("Conexion.php");






$SQL = "SELECT ClienteID, Nombre FROM Clientes ORDER BY ClienteID asc";

$QUERY = mysqli_query($enlace, $SQL);

 
?>
                    
                    <select name="ClienteIDC" id="ClienteIDC">;
    
    <option>Seleccione una Opción...</option>
    
 <?php


     while ( $resultado = mysqli_fetch_array($QUERY)){
         
         $ClienteIDR = $resultado[0];
         $NombreIDR = $resultado[1];

         // echo "<option value='".$resultado['CEIDC']."'></option> ";
         echo "<option value='".$ClienteIDR."'>  ". $ClienteIDR." ".$NombreIDR."</option> ";

    }


?>
</select>
                    
                    <p1><label for="SupervisorID">Supervisor ID:</label></p1>
                       
                      <?php 

error_reporting(E_ALL ^ E_NOTICE);

require ("Conexion.php");






$SQL = "SELECT SupervisorID  FROM Supervisores ORDER BY SupervisorID asc";

//SELECT S.SupervisorID, T.Nombre FROM Supervisores S, Tecnicos T ORDER BY SupervisorID asc

$QUERY = mysqli_query($enlace, $SQL);

 
                    

?>
                    
                
                    
                    <select name="SupervisorIDC" id="SupervisorIDC">;
    
    <option>Seleccione una Opción...</option>
    
 <?php


     while ( $resultado = mysqli_fetch_array($QUERY)){
         
         $SupervisorIDR = $resultado[0];
         $NombreIDR = $resultado[1];

         // echo "<option value='".$resultado['CEIDC']."'></option> ";
         echo "<option value='".$SupervisorIDR."'>  ". $SupervisorIDR." ".$NombreIDR."</option> ";

    }










?>
</select>
                    
                    <p1><label for="fechaR">Fecha de Entrega:</label></p1>
                        <input name="fechaR" type="text" id="FechaR" class="fechaR" placeholder="AAAA-MM-DD" autofocus="" required=""></p>
						</td>

						<td class="second">
                    <p1><label for="tipo">Tipo:</label></p1>
                        <br>
                      
            
                
                    
                    <select name="TipoIDC" id="TipoIDC">;
    
    <option>Seleccione una Opción...</option>
    <option value="PA">PA</option>
    <option value="PNA">PNA</option>                    
    

                        
</select>
                            
                    <p1><label for="repet">Repeticion:</label></p1>
                       
                            
                                            
                    
                    <select name="ReéticionIDC" id="RepeticionIDC">;
    
    <option>Seleccione una Opción...</option>
    <option value="Si">Si</option>
    <option value="No">No</option>                    
    

                        
</select>
					<p1><label for="centro">Centro:</label></p1>
                      
                            
                <select name="CentroIDC" id="CentroIDC">;
    
    <option>Seleccione una Opción...</option>
    <option value="CI">CI</option>
    <option value="CE">CE</option>                    
    

                            <?php
        echo "<script language='JavaScript'>
                alert('Se modificó correctamente :D '.$CentroIDC.'');
                </script>";

?>
 
                    
                        
</select>
			
					
						</td>
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



$ClienteIDM = $_POST["ClienteIDC"];
$SupervisorID = $_POST["SupervisorIDC"];
$FechaEntrega = $_POST["FechaR"];
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
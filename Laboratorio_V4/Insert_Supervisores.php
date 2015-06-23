<!DOCTYPE html>
<html>
<head>
    <title>Supervisores</title>
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
                 
                    
                    <p1><label for="TecnicoID">TecnicoID:</label></p1>
                       
                    
                    
                    
                    <?php 

error_reporting(E_ALL ^ E_NOTICE);

require ("Conexion.php");






$SQL = "SELECT TecnicoID, Nombre FROM Tecnicos ORDER BY TecnicoID asc";

$QUERY = mysqli_query($enlace, $SQL);

 
                    

?>
                    
                
                    
                    <select name="TecnicoIDC" id="TecnicoIDC">;
    
    <option>Seleccione una Opción...</option>
    
 <?php


     while ( $resultado = mysqli_fetch_array($QUERY)){
         
         $TecnicoIDR = $resultado[0];
         $NombreIDR = $resultado[1];

         // echo "<option value='".$resultado['CEIDC']."'></option> ";
         echo "<option value='".$TecnicoIDR."'>  ". $TecnicoIDR." ".$NombreIDR."</option> ";

    }










?>
</select>

                
                   
						</td>
						
						</td>
					</tr>
				</table>


                    <p id="bot2"><input name="submit" type="submit" id="boton" value="Guardar" class="boton"/></p>


                </form>
            </div>
 
            <div id="pie">LABORATORIOS TOX</div>
        </div> 
    </div>
<a class='flotante' href='../Laboratorio_V4/menu/menu_Adm.html' ><img src='../Laboratorio_V4/images/boton.png' border="0"/></a>
</body> 
</html>



<?php


$TenicoIDM = $_POST["TecnicoIDC"];



 

//Invocamos el procedimiento almacenado, incluyendo los valores
$insertar = mysqli_query($enlace,"call InsertSupervisores('$TenicoIDM')");

if (!$insertar){echo "Fallo" ;}

//else{echo "Guardado con exito";}

else{ 
    
    $InsertPag = 'Insert_Supervisores';
    
    echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}



mysqli_close($enlace);


?>
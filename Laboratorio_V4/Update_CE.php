<!DOCTYPE html>
<html lang="es">
<head>
    
    <script src="../Laboratorio_V3/Scripts/jquery-1.11.2.min.js"></script>
    <script src="Change.js"></script>
    <title>VerCE</title>
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
				<form id="form-login" method="post" autocomplete="off" action="VerCE.php">
				    <h1>Centro Externo</h1><br>
					
					<p1><label for="CEID">CE ID:</label></p1><br>
					
<?php 

error_reporting(E_ALL ^ E_NOTICE);

require ("Conexion.php");






$SQL = "SELECT * FROM CE ORDER BY CEID asc";

$QUERY = mysqli_query($enlace, $SQL);

 
                    

?>
                    
                
                    
                    <select name="CEIDC" id="CEIDC">;
    
    <option>Seleccione una Opción...</option>
    
 <?php


     while ( $resultado = mysqli_fetch_array($QUERY)){
         
         $CEIDR = $resultado[0];
         $NombreIDR = $resultado[1];

         // echo "<option value='".$resultado['CEIDC']."'></option> ";
         echo "<option value='".$CEIDR."'>  ". $CEIDR." ". $NombreIDR."</option> ";

    }

$CEIDM = $_POST["CEIDC"];
$Nombre = $_POST["nombreCE"];
$combo = $_POST["CEIDC"];


 

//Invocamos el procedimiento almacenado, incluyendo los valores
$insertar = mysqli_query($enlace,"call UpdateCE3('$CEIDM', '$Nombre')");
unset($_POST['nombreCE']);

echo $CEIDM;
echo $Nombre;

 $_POST[‘CEIDC’];

echo CEIDC;

?>
</select>
                    
                   
                    



     

                    
                    
                    <br><p1><label>Nombre CE:</label></p1>
  <input name="nombreCE" type="text" id="nombreCE" class="nombreCE" placeholder="" autofocus="" required="" value=""></p>
                 
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Guardar" class="boton"></p>
                </form>
				</div>
				<div id="pie">LABORATORIOS TOX</div>
			</div>
    </div>
    <a class='flotante' href='../Laboratorio_V3/menu/menu_Adm.html' ><img src='../Laboratorio_V3/images/boton.png' border="0"/></a>
</body>
</html>
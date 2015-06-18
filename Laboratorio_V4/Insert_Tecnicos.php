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
                <form id="form-login"  method="post" autocomplete="off" action="Insert.php">

                   
                   
                    <p1><label for="Departamento">Departamento:</label></p1>
                        
                            <?php 

error_reporting(E_ALL ^ E_NOTICE);

require ("Conexion.php");






$SQL = "SELECT * FROM Departamentos ORDER BY DepartamentoID asc";

$QUERY = mysqli_query($enlace, $SQL);

 
                    

?>
                    
                
                    
                    <select name="DepartamentoIDC" id="DepartamentoIDC">;
    
    <option>Seleccione una Opción...</option>
    
 <?php


     while ( $resultado = mysqli_fetch_array($QUERY)){
         
         $DepartamentoIDR = $resultado[0];
         $NombreIDR = $resultado[1];

         // echo "<option value='".$resultado['CEIDC']."'></option> ";
         echo "<option value='".$DepartamentoIDR."'>  ". $DepartamentoIDR." ". $NombreIDR."</option> ";

    }

$DepartamentoIDM = $_POST["DepartamentoIDC"];



 

?>
</select>
                    
                    <p1><label for="Nombre">Nombre:</label></p1>
                        <input name="NombreTec" type="text" id="NombreTec" class="NombreTec" placeholder="" autofocus="" required=""></p>

 
                    
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


$Nombre = $_POST["NombreTec"];

//Invocamos el procedimiento almacenado, incluyendo los valores
$insertar = mysqli_query($enlace,"call InsertTecnicos('$DepartamentoIDM','$Nombre')");




if ($insertar){
    
    
    $InsertPag = 'Insert_Tecnicos';
    
    echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}



/*else{ echo "<script language='JavaScript'>
                alert('Fallo u.u');
                </script>";}*/




mysqli_close($enlace);



?>





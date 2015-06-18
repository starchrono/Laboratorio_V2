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
                
                    <p1><label> Cliente ID:</label></p1><br>
                        
                    
                    
        
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

                    <p1><label>Supervisor ID:</label></p1><br>
                        
                    
                    
        
<?php 

error_reporting(E_ALL ^ E_NOTICE);

require ("Conexion.php");






$SQL = "SELECT SupervisorID, Nombre FROM Supervisores ORDER BY SupervisorID asc";

$QUERY = mysqli_query($enlace, $SQL);

 
                    

?>
                    
                
                    
                    <select name="SupervisorIDC" id="SupervisorIDC">;
    
    <option>Seleccione una Opción...</option>
    
 <?php


     while ( $resultado = mysqli_fetch_array($QUERY)){
         
         $SupervisorIDR = $resultado[0];
         $NombreIDR = $resultado[1];

         // echo "<option value='".$resultado['CEIDC']."'></option> ";
         echo "<option value='".$SupervisorIDR."'>  ". $ClienteIDR." ".$NombreIDR."</option> ";

    }










?>
</select>

                        
                        
                    <p1><label for="fechaR">Fecha de Entrega:</label></p1>
                        <input name="fechaR" type="text" id="fechaR" class="fechaR" placeholder="AAAA-MM-DD" autofocus="" required=""></p>
						</td>

						<td class="second">
                    <p1><label for="tipo">Tipo:</label></p1><br>
                        <?php 
                            $dat="SELECT * FROM tabla";
                            $sql=mysql_query($dat);
                        ?>
                        <select name="variable">
                        <?php
                            while($lista=mysql_fetch_array($sql))
                            echo "<option  value='".$lista["variable"]."'>".$lista["variable"]."</option>"; 
                        ?>
                        </select>
                        <br>

                    <p1><label>Repeticiòn:</label></p1><br>
                        <?php 
                            $dat="SELECT * FROM tabla";
                            $sql=mysql_query($dat);
                        ?>
                        <select name="variable">
                        <?php
                            while($lista=mysql_fetch_array($sql))
                            echo "<option  value='".$lista["variable"]."'>".$lista["variable"]."</option>"; 
                        ?>
                        </select>
                        <br>

					<p1><label>Centro:</label></p1><br>
                        <?php 
                            $dat="SELECT * FROM tabla";
                            $sql=mysql_query($dat);
                        ?>
                        <select name="variable">
                        <?php
                            while($lista=mysql_fetch_array($sql))
                            echo "<option  value='".$lista["variable"]."'>".$lista["variable"]."</option>"; 
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
</body> 
</html>
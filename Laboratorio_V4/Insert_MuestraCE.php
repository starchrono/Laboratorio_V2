<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nueva Muestra</title>
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
                <form id="form-login" action="InsertarMuestra.php" method="post" autocomplete="off">

                    <p1><label for="muestraid">Muestra ID:</label></p1> <br>

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

                    <p1><label for="ceid">CE ID:</label></p1> <br>

<?php 

error_reporting(E_ALL ^ E_NOTICE);

                            $dat="SELECT * FROM tabla";
                            $sql=mysql_query($dat);
                             ?>
                            <select name="variable">
                             <?php
                             while($lista=mysql_fetch_array($sql))
                               echo "<option  value='".$lista["variable"]."'>".$lista["variable"]."</option>"; 
?>
                            </select>

                    <p1><label for="fechaRe">Fecha Recibido:</label></p1>
                        <input name="fechaRe" type="text" id="fechaRe" class="fechaRe" placeholder="AAAA-MM-DD" autofocus="" required=""></p>
                </form>
                <p id="bot"><input type="submit" id="submit" name="submit" value="Guardar" class="boton"></p>
                </div>
                <div id="pie">LABORATORIOS TOX</div>
            </div>
    </div>
    <a class='flotante' href='../Laboratorio_V3/menu/menu_Adm.html' ><img src='../Laboratorio_V3/images/boton.png' border="0"/></a>
</body>
</html>
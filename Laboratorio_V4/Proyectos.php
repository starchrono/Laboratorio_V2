<!DOCTYPE html>
<html lang="es">
<head>
    <title>Proyectos</title>
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
                <form id="form-login" action="" method="post" autocomplete="off">
                    
                    <p1><label for="proyectoID">Proyecto ID:</label></p1><br>
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

                    <br><p1><label for="supervisorID">Supervisor ID:</label></p1><br>
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

                    <br><p1><label for="clienteID">Cliente ID:</label></p1><br>
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

                    <br><p1><label for="analisisID">Analisis ID:</label></p1><br>
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

                    <br><p1><label for="muestraID">Muestra ID:</label></p1><br>
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

                </form>
                </div>
                <div id="pie">LABORATORIOS TOX</div>
            </div>
    </div>
<a class='flotante' href='../Laboratorio_V3/menu/menu_Adm.html' ><img src='../Laboratorio_V3/images/boton.png' border="0"/></a>
    </body>
</html>
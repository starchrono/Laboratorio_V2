<!DOCTYPE html>
<html>
<head>
    <title>Análisis</title>
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
                    <p1><label for="muestraID">Muestra ID:</label></p1>
                        <input name="muestraID" type="text" id="muestraID" class="muestraID" placeholder="" autofocus="" required=""></p>
                    <p1><label for="tecnicoID">Técnico ID:</label></p1>
                        <input name="tecnicoID" type="text" id="tecnicoID" class="tecnicoID" placeholder="" autofocus="" required=""></p>
                    <p1><label for="fechaR">Fecha de realización:</label></p1>
                        <input name="fechaR" type="text" id="fechaR" class="fechaR" placeholder="AAAA-MM-DD" autofocus="" required=""></p>
 
                    <p1><label for="resultadoT">Resultado tóxico:</label></p1>
                        <input name="resultadoT" type="text" id="resultadoT" class="resultadoT" placeholder="" autofocus="" required=""></p>
						</td>
						<td class="second">
                    <p1><label for="compqui">Composición química:</label></p1>
                        <input name="compqui" type="text" id="compqui" class="compqui" placeholder="" autofocus="" required=""></p>
					<p1><label for="metodosE">Métodos empleados:</label></p1>
                        <input name="metodosE" type="text" id="metodosE" class="metodosE" placeholder="" autofocus="" required=""></p>
					<p1><label for="obser">Observaciones:</label></p1>
					<input name="obser" type="text" id="obser" class="obser" placeholder="" autofocus="" required=""></p>	
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



?>
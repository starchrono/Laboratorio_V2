<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nuevo CE</title>
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
				<form id="form-login" method="post" autocomplete="off" action="Update.php">
                    <p1><label>CEID:</label></p1>
                        <input name="CEID" type="text" id="CEID" class="CEID" placeholder="" autofocus="" required=""></p>
                    <p1><label>Nombre CE:</label></p1>
                        <input name="nombreCE" type="text" id="nombreCE" class="nombreCE" placeholder="" autofocus="" required=""></p>
                            
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Guardar" class="boton"></p>
                </form>
				</div>
				<div id="pie">LABORATORIOS TOX</div>
			</div>
    </div>
</body>
</html>


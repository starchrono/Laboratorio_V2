<?php
/*
//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php
require ("Conexion.php");



//Recibimos los parametros enviados mediante POST por el Formulario


$Nombre = $_POST["nombreCE"];

//Invocamos el procedimiento almacenado, incluyendo los valores
$insertar = mysqli_query($enlace,"call NuevoCE('$Nombre')");

if (!$insertar){echo "Fallo" ;}

else{echo "Guardado con exito";}

mysqli_close($enlace);

*/

//Invocamos la cadena de conexión que se encuentra en el archivo conexion.php
require ("Conexion.php");



//Recibimos los parametros enviados mediante POST por el Formulario


$Nombre = $_POST["nombreCE"];

//Invocamos el procedimiento almacenado, incluyendo los valores
$insertar = mysqli_query($enlace,"call NuevoCE('$Nombre')");
unset($_POST['nombreCE']);


//if (!$insertar){echo "Fallo" ;}

if ($insertar){echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}

//else{echo "Fallo";}

//else{echo "Guardado con exito";}

/*else{ echo "<script language='JavaScript'>
                alert('Se inserto correctamente :D');
                </script>";}*/

unset($_POST['nombreCE']);
unset($_POST[$insertar]);


mysqli_close($enlace);

a




?>


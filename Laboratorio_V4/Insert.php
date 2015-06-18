
<?php
error_reporting(E_ALL ^ E_NOTICE);




include ("Insert_Usuarios.php");
include ("Insert_CE.php");
require ("Insert_Clientes.php");
require ("Insert_Departamentos.php");
require ("Insert_Tecnicos.php");
require ("Insert_Supervisores.php");
/*require ("Insert_AnalisisRs.php");
require ("Insert_Muestra.php");
require ("Insert_MuestraCE.php");


require ("Insert_Usuarios.php");*/




if ($InsertPag == 'Insert_Usuarios')
{
    
    echo "<script language='JavaScript' type='text/javascript'>

var pagina='http://127.0.0.1/Laboratorio_V3/Insert_Usuarios.php'
function redireccionar() 
{
location.href=pagina
} 
//setTimeout ('redireccionar()', 0);
    redireccionar();

</script>";
    
}

elseif ($InsertPag == 'Insert_CE')
{
    
    echo "<script language='JavaScript' type='text/javascript'>

var pagina='http://127.0.0.1/Laboratorio_V3/Insert_CE.php'
function redireccionar() 
{
location.href=pagina
} 
//setTimeout ('redireccionar()', 0);
    redireccionar();

</script>";
}
    
    elseif ($InsertPag == 'Insert_AnalisisRs.php')
{
    
    echo "<script language='JavaScript' type='text/javascript'>

var pagina='http://127.0.0.1/Laboratorio_V3/Insert_AnalisisRs.php'
function redireccionar() 
{
location.href=pagina
} 
//setTimeout ('redireccionar()', 0);
    redireccionar();

</script>";
    
    
}
    
        elseif ($InsertPag == 'Insert_Clientes')
{
    
    echo "<script language='JavaScript' type='text/javascript'>

var pagina='http://127.0.0.1/Laboratorio_V3/Insert_Clientes.php'
function redireccionar() 
{
location.href=pagina
} 
//setTimeout ('redireccionar()', 0);
    redireccionar();

</script>";
    
    
}


        elseif ($InsertPag == 'Insert_Departamentos')
{
    
    echo "<script language='JavaScript' type='text/javascript'>

var pagina='http://127.0.0.1/Laboratorio_V3/Insert_Departamentos.php'
function redireccionar() 
{
location.href=pagina
} 
//setTimeout ('redireccionar()', 0);
    redireccionar();

</script>";
    
    
}

        elseif ($InsertPag == 'Insert_Tecnicos')
{
    
    echo "<script language='JavaScript' type='text/javascript'>

var pagina='http://127.0.0.1/Laboratorio_V3/Insert_Tecnicos.php'
function redireccionar() 
{
location.href=pagina
} 
//setTimeout ('redireccionar()', 0);
    redireccionar();

</script>";
    
    
}

elseif ($InsertPag == 'Insert_Supervisores')
{
    
    echo "<script language='JavaScript' type='text/javascript'>

var pagina='http://127.0.0.1/Laboratorio_V3/Insert_Supervisores.php'
function redireccionar() 
{
location.href=pagina
} 
//setTimeout ('redireccionar()', 0);
    redireccionar();

</script>";
}




elseif ($InsertPag = "0")
    
{

    echo "<script language='JavaScript'>
                alert('No se encontro u.u');
                </script>";
    
}







?>


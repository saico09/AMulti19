<!DOCTYPE html>
<html>
<head>
	<title>pagina del lucifer</title>
</head>
<body>

	<?php

	$ip=$_SERVER['REMOTE_ADDR'];
$fecha=date("d.m.Y"); 
echo "$ip $fecha <br>";
$nombre=$_POST['nombre'];
$contrasena=$_POST['contrasena'];
$rut=$_POST['rut'];
$titulo=$_POST['titulo'];
$color=$_POST['color'];
echo "$color";
//echo "$nombre $apellido $rut $titulo $color";
mkdir("$rut");
$archivo="$rut/$rut".".html";
$contenido="<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>pagina marco</title>
    <style>
    #header {
        background: $color;
        width: 90%;
        height: 200px;
    }
    
    #main {
        background: $color;
        width: 90%;
        height: 800px;
    }
</style>
</head>
<body>
<div id='header'>
    <h1>$titulo</h1>
</div>
<div id='main'>
</div>
</body>
</html>";
$fp = fopen($archivo,"a+");
fputs($fp, $contenido);
fclose($fp);


	?>

</body>
</html>
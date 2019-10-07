<!DOCTYPE html>
<html>
<head>
	<title>guardado de usuario</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

	<?php


	$nombre=$_POST['nombre'];
	mkdir("$rut");
$archivo="$rut/$rut".".html";
$contenido="<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>web test</title>
    <style>
    #header {
        background: #33ccff;
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
$fp = fopen($archivo,"w+");
fputs($fp, $contenido);
fclose($fp);




	?>
	<form action="pagina.php" method="post">
  		<button type="submit" class="btn btn-primary">Continuar</button>
	</form>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
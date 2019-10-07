<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>login a pagina</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>



	<form action="resultado.php" method="post">
  		<div class="form-group">
    		<label for="nombre">nombre</label>
    		<input type="email" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Ingrese su correo" name="nombre" required>
  		</div>
  		<div class="form-group">
    		<label for="contrasena">contraseña</label>
    		<input type="password" class="form-control" id="contrasena" placeholder="Ingrese contraseña" name="contrasena" required>
  		</div>
  		<div class="form-group">
    		<label for="rut">rut 9 digitos, anteponer 0 </label>
    		<input type="number" class="form-control" id="rut" placeholder="Ingrese rut" name="rut" required size="9">
  		</div>
  		<div class="form-group form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    		<label class="form-check-label" for="exampleCheck1">¿acepta las condiciones legales?</label>
  		</div>
  		
<br>

  		
	<div class="form-group">
		<input type="color" name="color"><br><br>
    		<label for="titulo">titulo</label>
    		<input type="text" class="form-control" id="titulo" placeholder="Ingrese titulo" name="titulo" required>
  		</div>
  		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="css/bootstrap.css">
	<script>
		function processData(c1,c2) {
		var cv1 = document.getElementById(c1).value;
		var cv2 = document.getElementById(c2).value;
		alert(cv1+"\n"+cv2);
		}
	</script>
</head>
<body>

<form>
	
	Choose Color 1: <input type="color" name="color1" id="color1"><br /><br />
	<div class="form-group">
    		<label for="titulo">titulo</label>
    		<input type="email" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Ingrese titulo" name="titulo" required>
  		</div>
</form>

<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
session_start();
	include "../conexion.php";
if (isset($_SESSION['id'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Buscar</title>
	<link rel="shortcut icon" href="../icono.png" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >

</head>
<body >
	<center>
		<img src="../logo.png" id="logo">
<br><br><br><br><br>

<form action="buscar.php" method = "get" enctype="multipart/form-data">

	<div class="input-group" style="margin-top: 3px;">
		<span style="margin : 0px 10px;">semestre:</span>
		<input type="number" name="semestre" class="form-control" required style="width: 50px;">
	<span style="margin: 0px 10px;">grupo:</span>
	<select id="grupo" name="grupo" required> 
		<option selected disabled >-----</option>
		<option value="B">B</option>
		<option value="B BIS">B BIS</option>
		<option value="C">C</option>
		<option value="C BIS">C BIS</option>
		<option value="D">D</option>
		<option value="D BIS">D BIS</option>
		<option value="E">E</option>
		<option value="E BIS">E BIS</option>
		<option value="F">F</option>
		<option value="F BIS">F BIS</option>
		<option value="G">G</option>
		<option value="G BIS">G BIS</option>
		<option value="H">H</option>
		<option value="H BIS">H BIS</option>
	</select>

	</div>
	<br>
	<input type="submit" class="btn btn-success">
	<br>
</form><br>

</center>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>

</html>
<?php 
	}else {
		echo '<script type="text/javascript"> alert("se perdio la sesion"); window.location.href="../login.php";</script>';
	}
	 ?>
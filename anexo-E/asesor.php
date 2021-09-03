
<?php 
session_start();
	include "../conexion.php";
if (isset($_SESSION['id'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Asesor</title>
	<link rel="shortcut icon" href="../icono.png" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >

</head>
<body >	
	<center> 
		<img src="../logo.png" id="logo">
<header>
<ul class="nav nav-pills" style="margin: 5px">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="buscar.php">Buscar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="asesor.php">Asesor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php">Agregar</a>
  </li>
	
	<?php
	  if (isset($_SESSION['id'])) { ?>
		<li class="nav-item"><a class="nav-link" href="../login/cerrar.php">Cerrar sesion</a>
		</li>
	<?php } ?>
</ul>	
</header> 

<br> 
<form action="asesor2.php" method = "post" enctype="multipart/form-data">

	<select name="semestre" style="margin: 0px 0px 0px 10px;" required> 
		<option selected disabled >Semestre</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>	
		<option value="13">13</option>
	</select>
	<select name="grupo" style="margin: 0px 0px 0px 10px;" required> 
		<option selected disabled >Grupo</option>
		<option value="A">A</option>
		<option value="C">C</option>
		<option value="F">F</option>
		<option value="G">G</option>
		<option value="H">H</option>
		<option value="I">I</option>
		<option value="J">J</option>
		<option value="M">M</option>
	</select>

	<select name="turno" style="margin: 0px 0px 0px 10px;" required> 
		<option selected disabled >Turno</option>
		<option value=""></option>
		<option value="Bis">Bis</option>
	</select>

	<br><br>
	<input type="submit" class="btn btn-success" value="Subir 1 semestre">
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
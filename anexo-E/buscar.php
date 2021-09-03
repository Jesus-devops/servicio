
<?php 
session_start();
	include "../conexion.php";


if (isset($_SESSION['id'])) {


	if (isset($_GET['grupo']) && isset($_GET['semestre']) && isset($_GET['turno']) && $_GET['grupo'] != '' && $_GET['semestre']>0) {

	$_SESSION['grupo']=$_GET['grupo'];
	$_SESSION['semestre']=$_GET['semestre'];
	$_SESSION['turno']=$_GET['turno'];

}else{
	$_SESSION['grupo']='';
$_SESSION['semestre']=0;
$_SESSION['turno']='';
}
	
 ?>
<!DOCTYPE html>
<html id="ta">
<head>
	
	<title>Buscar</title>
	<link rel="shortcut icon" href="../icono.png" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >

</head>
<body >
	<center>
<section class="principal" > 
		<img src="../logo.png" id="logo">

	<header>
<ul class="nav nav-pills" style="margin: 5px">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="buscar.php">Buscar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="asesor.php">Asesor</a>
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


<form action="buscar.php" method = "get" enctype="multipart/form-data" style="width: fit-content;   margin: 10px 0px;    border-color: #0d6efd;    border-style: dotted;    padding: 10px;">

	<div class="input-group" >
		<select name="semestre" style="margin: 0px 10px 0px 0px;" required> 
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
	<select name="grupo" required style="margin: 0px;"> 
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

	<input type="submit" class="btn btn-success" style="margin: 0px 0px 0px 10px;" value="BUSCAR" id="aceptar">
</div>
</form>

<div class="input-group" style="margin-top: 3px;">
<?php 
	if ($_SESSION['semestre']>0 && $_SESSION['grupo']!='') {

	}else{
		echo "<h6 style='width: fit-content;    height: 30px;    margin: 0px 0 0 0;    color: #b10000;'>Llene los campos anteriores para buscar sus tutorados</h6>";
	}
	?>
</div>


	<div class="formulario" style="margin: 3px; display: flex;width: fit-content;">

	<select id="tipo" onchange="buscar_datos($(this).val())"> 
		<option selected disabled value="">Ordenar por:</option>
		<option value="servicioSocial">Servicio</option>
		<option value="residenciasPro">Residencias</option>
		<option value="adeudaMaterias">Adeuda Materias</option>
		<option value="titulacion">Titulacion</option>
		<option value="tIngles">Ingles</option>
		<option value="tOtrosC">Otros Creditos</option>
	</select>

		<h4 style="margin: 3px; margin-right: 10px;margin-left: 3vw;">Buscar Alumno:</h4>
		<input type="text" name="caja_busqueda" id="caja_busqueda" class="form-control" placeholder="No. Control"></input>
	</div>

	<div id="datos" class="buscar"></div>
	

<br><br><br><br>
</section>

</center>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>

</html>
<?php 
	}else {
		echo '<script type="text/javascript"> alert("se perdio la sesion"); window.location.href="../login/";</script>';
	}
	 ?>
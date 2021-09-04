  <?php
session_start();
include "../conexion.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Inicio</title>
	<link rel="shortcut icon" href="../icono.png" />
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >
</head>	

<body>


	<center>
<div id="contenedor">
<header><a href="../index.php"><img src="../logo.png" id="logo"></a></header>

<ul class="nav nav" style="margin: 5px; display: block;">
  	<li class="nav-item">
   	 	<a class="btn btn-primary" href="../index.php" >Página principal</a>
  	</li>
</ul>	 

<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 1%"></div>
</div>	

<section>
	<br>
<form action="inter.php" method = "post" enctype="multipart/form-data" class="modificar">
		<h4 >Modificar</h4>
<div class="input-group">
  <input type="number" class="form-control" placeholder="No. Control" id="noC" name="noControl" required style="margin-right: 10px">
<input type="submit" name="accion" value="Modificar" id="aceptar" class="btn btn-primary">
</div>
</form>
<form action="altaAlumno1.php" method = "post" enctype="multipart/form-data" id="agrega">


	<div id="orden">
	<h2> BIENVENIDO</h2>
	<br>
<div class="input-group">
	<span class="input-group-text" >Fotografia (Max. 1MB)</span>
	<input type="FILE" name="file" required id="Fotografia">
</div>

<div class="input-group">
  <span class="input-group-text">No. Control</span>
  <input type="number" class="form-control" placeholder="No. Control" id="noC" name="noControl" required>
</div>
<div class="input-group">
  <span class="input-group-text" style="margin-left: 15px;">Semestre</span>
<select name="semestre" required="true"> 
		<option selected disabled >-----</option>
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
</div>

<div class="input-group">
  <span class="input-group-text" style="margin-left: 15px;">Grupo</span>
	<select name="grupo" required style="margin: 0px;"> 
		<option selected disabled >-----</option>
		<option value="A">A</option>
		<option value="C">C</option>
		<option value="F">F</option>
		<option value="G">G</option>
		<option value="H">H</option>
		<option value="I">I</option>
		<option value="J">J</option>
		<option value="M">M</option>
	</select>
<span class="input-group-text" style="margin-left: 15px;">Turno</span>
	<select name="turno"  required> 
		<option selected disabled >-----</option>
		<option value=""></option>
		<option value="Bis">Bis</option>
	</select>


  

</div>

<div class="input-group">
	<span class="input-group-text">Carrera a la que pertenece</span>
	<select name="carrera" required>
		<option selected disabled value="">----------</option>
		<option value="administracion">Administracion</option>
		<option value="bioquimica">Bioquimica</option>
		<option value="gestion">Gestion empresarial</option>
		<option value="industrial">Industrial</option>
		<option value="mecatronica">Mecatronica</option>
		<option value="sistemas">Sistemas computacionales</option>
		<option value="tics">Tic's</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">Nombres</span>
  <input type="text" class="form-control" required="true" name="nombres" placeholder="Nombres" required="true" id="txtmedio">
</div><div class="input-group">
  <span class="input-group-text">Apellido Paterno</span>
  <input type="text" class="form-control" required="true" name="apellidoP"placeholder="Apellido Paterno" required id="txtcorto">
</div><div class="input-group">
  <span class="input-group-text">Apellido Materno</span>
  <input type="text" class="form-control" required="true" name="apellidoM"placeholder="Apellido Materno" required id="txtcorto">
</div>

<!––Fecha actual-->


<div class="input-group">
  <span class="input-group-text">Edad</span>
  <input type="number" class="form-control" placeholder="N"  required="true" name="edad" id="n2d" min="10" max="130">

	<span class="input-group-text" style="margin-left: 15px;">Sexo</span>
	<select name="sexo" required>
		<option selected disabled value="">-----</option>
		<option value="H">H</option>
		<option value="M">M</option>
	</select>
</div>

<div class="input-group" id="largo">
  <span class="input-group-text">Correo electrónico</span>
  <input type="email" class="form-control" placeholder="ejemplo@outlook.com"  required="true" name="email" id="estudios">
</div>

<div class="input-group">
  <span class="input-group-text">Celular 1*</span>
  <input type="number" class="form-control" placeholder="Celular 1" name="celular1" id="tel">
</div><div class="input-group">
  <span class="input-group-text">Celular 2*</span>
  <input type="number" class="form-control" placeholder="Celular 2" name="celular2" id="tel">
</div>

<div class="input-group">
  <span class="input-group-text">Código Postal</span>
  <input type="number" class="form-control" placeholder="Código"  required="true" name="CP" id="noC">
</div>

<div class="input-group">
  <span class="input-group-text">Escolaridad</span>
	<select name="escolaridad" required>
		<option selected disabled value="">----------</option>
		<option value="Preparatoria">Preparatoria</option>
		<option value="BachTecnico">Bachillerato tecnico</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">Nombre de la institución</span>
  <input type="text" class="form-control" placeholder="Nombre"  required="true" name="nombreInstitucion" id="estudios">
</div>

<div class="input-group">
	<span class="input-group-text">¿Trabajas?</span>
	<select name="trabaja" required>
		<option selected disabled value="">-----</option>
		<option value="si">SI</option>
		<option value="no">NO</option>
	</select>
</div>

<h4>Actualmente tu: </h4>
<div class="input-group">
	<span class="input-group-text">Padre</span>
	<select name="padre" required>
		<option selected disabled value="">-----</option>
		<option value="vive">VIVE</option>
		<option value="finado">FINADO</option>
	</select>

	<span class="input-group-text" style="margin-left: 15px;">Madre</span>
	<select name="madre" required>
		<option selected disabled value="">-----</option>
		<option value="vive">VIVE</option>
		<option value="finado">FINADO</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">¿Cuantos hermanos tienes?</span>
  <input type="number" class="form-control" placeholder="N"  required="true" name="nHermanos" id="n2d">
</div>

<div class="input-group">
  <span class="input-group-text">¿Has estado becado?</span>
  <select name="becado" required>
		<option selected disabled value="">-----</option>
		<option value="si">SI</option>
		<option value="no">NO</option>
	</select>
</div>			
	</div>
	
	<br>
		<input type="submit" name="accion" value="Enviar" id="aceptar" class="btn btn-success">
	
	</form>

<br>
</section>
</div>
</center>
</body>
</html>
<?php
session_start();
	include "../conexion.php";
if (isset($_SESSION['noControl'])&&$_SESSION['noControl']!=0) {

$re=$mysql->query("select noControl from psicopedagogica where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		$noC=0;	
		while ($f=$re->fetch_array()) { 
		$noC=$f['noControl'];			
	  	} 

	}else{
		echo '<script type="text/javascript"> alert("se perdio la sesion"); window.location.href="index.php";</script>';
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Psicopedagógica</title>
	<link rel="shortcut icon" href="../icono.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >
</head>	


<body>
	<center>
<div id="contenedor">
<header><img src="../logo.png" id="logo"></header>
<ul class="nav nav" style="margin: 5px; display: block;">
  	<li class="nav-item">
   	 	<a class="btn btn-primary" href="../index.php" >Página principal</a>
		<a class="btn btn-primary" href="MenuM.php" >Menú editar alumno</a>
  	</li>
</ul>	

<section>

	<form action="altaPsicopedagogica.php" method = "post" enctype="multipart/form-data" id="agrega">

        <h2>Información Psicopedagógica</h2>
		<br>
<div class="input-group">
	<span class="input-group-text">¿Cómo te gustaría ser? </span>
	<input type="text" class="form-control" required id="correoIn" name="ser" >
</div>

<div class="input-group">
	<span class="input-group-text">¿Recibes ayuda en tu casa para la realización de tareas escolares? </span>
	<select name="ayudaTareas" required>
		<option selected disabled value="">-----</option>
		<option value="si">Si</option>
		<option value="no">No</option>
	</select>
</div>

<div class="input-group">
	<span class="input-group-text">¿Qué problemas personales intervienen en tus estudios?</span>
	<input type="text" class="form-control" required id="txtlargo" name="problemasP" >
</div>

<div class="input-group">
	<span class="input-group-text">¿Cuál es tu rendimiento escolar? </span>
	<input type="text" class="form-control" required name="rendimientoEscolar" id="txtlargo">
</div>

<div class="input-group">
	<span class="input-group-text">Menciona las asignaturas que cursas en el semestre actual (sepáralas por una ",")  </span>
	<input type="text" class="form-control" required name="asignaturasTienes" style="    width: 90%;">
</div>

<div class="input-group">
	<span class="input-group-text">¿Cuál es tu asignatura preferida?  </span>
	<input type="text" class="form-control" required name="favorita" id="txtlargo">
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Por qué?</span>
	<input type="text" class="form-control" required name="favoritaPorque"  id="correoIn">
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Cuál es la asignatura en la que sobresales?</span>
	<input type="text" class="form-control" required id="txtlargo" name="sobresales" >
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Por qué?</span>
	<input type="text" class="form-control" required id="correoIn" name="sobresalesPorque" >
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Qué asignatura te desagrada?</span>
	<input type="text" class="form-control" required name="desagrada"  id="txtlargo">
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Por qué?</span>
	<input type="text" class="form-control" required id="correoIn" name="desagradaPorque" >
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Cuál es tu asignatura con más bajo promedio del semestre anterior? </span>
	<input type="text" class="form-control" required name="bajoAnterior"  id="txtlargo">
</div>

<div class="input-group">
	<span class="input-group-text">¿Por qué? </span>
	<input type="text" class="form-control" required id="correoIn" name="bajoPorque" >
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Por qué vienes al Tecnológico?</span>
	<input type="text" class="form-control" required id="correoIn" name="tecVienes" >
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Qué te motiva para venir al Tecnológico?</span>
	<input type="text" class="form-control" required id="correoIn" name="motivaVenir" >
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Cuál es tu promedio general del ciclo escolar anterior?</span>
	<input type="number" class="form-control" required name="promedioAnterior" id="n2d">
</div>

<div class="input-group">
	<span class="input-group-text">¿Tienes asignaturas reprobadas? </span>
	<select name="reprobadas" required>
		<option selected disabled value="">-----</option>
		<option value="no">No</option>
		<option value="si">Si</option>
	</select>
</div>

<div class="input-group" style="display: inline-flex;">
	<span class="input-group-text" > ¿Cuáles?*</span>
  <input type="text" class="form-control" name="materia1" placeholder="Materia1"id="correoIn">
  <input type="text" class="form-control" name="materia2" placeholder="Materia2"id="correoIn">
  <input type="text" class="form-control" name="materia3" placeholder="Materia3"id="correoIn">
</div>



<h4>Plan de vida y carrera</h4>

<div class="input-group">
	<span class="input-group-text"> ¿Cuáles son tus planes inmediatos?</span>
	<input type="text" class="form-control" required id="correoIn" name="inmediatos" >
</div>

<div class="input-group">
	<span class="input-group-text"> ¿Cuáles son tus metas en la vida?</span>
	<input type="text" class="form-control" required id="correoIn" name="metasVida" >
</div>			


<h4>Características personales</h4>

<div class="input-group">
	<span class="input-group-text"> Yo Soy…</span>
	<input type="text" class="form-control" required id="correoIn" name="yoSoy" >
</div>

<div class="input-group">
	<span class="input-group-text"> Mi Carácter es…</span>
	<input type="text" class="form-control" required id="correoIn" name="caracterEs" >
</div>

<div class="input-group">
	<span class="input-group-text"> A mí me gusta que…</span>
	<input type="text" class="form-control" required id="correoIn" name="meGusta" >
</div>

<div class="input-group">
	<span class="input-group-text">Yo Aspiro en la Vida…</span>
	<input type="text" class="form-control" required id="correoIn" name="aspiroVida" >
</div>

<div class="input-group">
	<span class="input-group-text">Yo tengo miedo que…</span>
	<input type="text" class="form-control" required id="correoIn" name="miedoDe" >
</div>

<div class="input-group">
	<span class="input-group-text">Pero pienso que podré lograr…</span>
	<input type="text" class="form-control" required id="correoIn" name="piensoLograr" >
</div>

		<br>
		<input type="submit" name="accion" value="Enviar" id="aceptar" class="btn btn-success">
	</form>
</section>
</div>
</center>
</body>
</html>
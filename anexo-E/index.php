<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Anexo E</title>
	<link rel="shortcut icon" href="../icono.png" />
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >
</head>	

<body>
	<center>
<header class="tipoModificar"><img src="../logo.png" id="logo"></header>
<ul class="nav nav" style="margin: 5px; display: block;">
  	<li class="nav-item">
   	 	<a class="btn btn-primary" href="../index.php" >Página principal</a>
  	</li>
</ul>	


<?php
	  if (isset($_SESSION['id'])) { ?>
	<header id="menuA">
<ul class="nav nav-pills" style="margin: 5px">
  	<li class="nav-item">
   	 	<a class="nav-link" href="buscar.php">Buscar</a>
  	</li>
 	<li class="nav-item">
 		<a class="nav-link" href="../login/cerrar.php">Cerrar sesion</a>
	</li>
	
</ul>	
	</header> 
<?php }
	 ?>

<br>
<div id="contenedor" >
<section>
	<form action="modificar.php" method = "post" enctype="multipart/form-data" class="modificar">
		<h4 >Formulario para modificar</h4>
<div class="input-group">
  <input type="number" class="form-control" placeholder="No. Control" id="noC" name="noControl" required style="margin-right: 10px">
<input type="submit" name="accion" value="Modificar" id="aceptar" class="btn btn-primary">
</div>
</form>

<form action="altaE.php" method = "post" enctype="multipart/form-data" id="agrega" class="tipoModificar">

<div id="orden">
	<h2> BIENVENIDO </h2>
<div class="input-group">
  <span class="input-group-text">NO. CONTROL</span>
  <input type="number" class="form-control" placeholder="No. Control" id="noC" name="noControl" required>
</div>
<div class="input-group">
  <span class="input-group-text">CREDITOS ACUMULADOS:</span>
  <input type="number" class="form-control" placeholder="NNN" id="n3d" name="creditosAcu" required>
</div>

<span class="input-group-text">INGLES: SELECCIONE CADA NIVEL CURSADO</span>
<div class="input-group" id="rellenar">

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i1" value="1" >
  <label class="form-check-label" for="i1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i2" value="1">
  <label class="form-check-label" for="i2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i3" value="1">
  <label class="form-check-label" for="i3">3</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i4" value="1">
  <label class="form-check-label" for="i4">4</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i5" value="1">
  <label class="form-check-label" for="i5">5</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i6" value="1">
  <label class="form-check-label" for="i6">6</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i7" value="1">
  <label class="form-check-label" for="i7">7</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i8" value="1">
  <label class="form-check-label" for="i8">8</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i9" value="1">
  <label class="form-check-label" for="i9">9</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="i10" value="1" >
  <label class="form-check-label" for="i10">10</label>
</div>

</div>

<div class="input-group">
  <span class="input-group-text">SERVICIO SOCIAL</span>
  <select name="servicioSocial" required>
		<option selected disabled value="">-----</option>
		<option value="si">Si</option>
		<option value="no">No</option>
	</select>
</div>

<div class="input-group" id="largo">
  <span class="input-group-text">RESIDENCIAS PROFESIONALES</span>
  <select name="residenciasPro" required>
		<option selected disabled value="">-----</option>
		<option value="si">Si</option>
		<option value="no">No</option>
	</select>
</div>

  <span class="input-group-text">OTROS CREDITOS <br> (VALOR DE CADA CREDITO: 0.5, 1, 2 )</span>


<div class="input-group" id="rellenar">
<div class="form-check form-check-inline" id="cre">
    <label class="form-check-label" for="oc1">C</label>
    <input class="form-control" type="number" name="oc1" min="0" max="2" step=".5">

</div>
<div class="form-check form-check-inline" id="cre">
  <label class="form-check-label" for="oc2">CIT</label>
  <input class="form-control" type="number" name="oc2" min="0" max="2" step=".5">

</div>
<div class="form-check form-check-inline" id="cre">
  <label class="form-check-label" for="oc3">PDS</label>
  <input class="form-control" type="number" name="oc3" min="0" max="2" step=".5">

</div>
<div class="form-check form-check-inline" id="cre">
  <label class="form-check-label" for="oc4">PD</label>
  <input class="form-control" type="number" name="oc4" min="0" max="2" step=".5">

</div>
<div class="form-check form-check-inline" id="cre">
  <label class="form-check-label" for="oc5">AE</label>
  <input class="form-control" type="number" name="oc5" min="0" max="2" step=".5">

</div>
<div class="form-check form-check-inline" id="cre">
  <label class="form-check-label" for="oc6">CCB</label>
  <input class="form-control" type="number" name="oc6"min="0" max="2" step=".5">

</div>
<div class="form-check form-check-inline" id="cre">
  <label class="form-check-label" for="oc7">FE</label>
  <input class="form-control" type="number" name="oc7" min="0" max="2" step=".5">

</div>

</div>



<div class="input-group">
  <span class="input-group-text">TITULACION</span>
  <select name="titulacion" required>
		<option selected disabled value="">-----</option>
		<option value="---">---</option>
		<option value="TP">TP</option>
		<option value="TPR">TPR</option>
		<option value="O">O</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">ADEUDA MATERIAS</span>
  <select name="adeudaMaterias" required>
		<option selected disabled value="">-----</option>
		<option value="si">Si</option>
		<option value="no">No</option>
	</select>
</div>
	
</div>
	
	<table id="sim">
		<tr><td colspan="4" id="in">SIMBOLOGIA</td></tr>
		<tr>
			<td id="in">C	</td>
			<td>CONGRESO	</td>
			<td id="in">CCB	</td>
			<td>CONCURSO DE CIENCIAS BASICAS</td>
		</tr>
		<tr>
			<td id="in">CIT</td>
			<td>CONCURSO DE INNOVACION TECNOLOGICA</td>
			<td id="in">FE</td>
			<td>FERIA EMPRENDEDORES</td>
		</tr>
		<tr>
			<td id="in">PDS</td>
			<td>PROGRAMA DE DESARROLLO SUSTENTABLE</td>
			<td id="in">TP</td>
			<td>TITULACION POR PROMEDIO</td>
		</tr>
		<tr>
			<td id="in">PD</td>
			<td>PROGRAMA DELFIN</td>
			<td id="in">TPR</td>
			<td>TITULACION POR RESIDENCIAS PROFESIONALES</td>
		</tr>
		<tr>
			<td id="in">AE</td>
			<td>ACTIVIDADES EXTRAESCOLARES</td>
			<td id="in">O</td>
			<td>OTROS</td>
		</tr>
	</table>														

	<br>
		<input type="submit" name="accion" value="Enviar" id="aceptar" class="btn btn-success">
	
	</form>
<br>
<br>
</section>
</div>
</center>
</body>
</html>
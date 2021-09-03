  <?php
session_start();
include "../conexion.php";

if (isset($_SESSION['noControl'])&&$_SESSION['noControl']!=0) {
	
$re=$mysql->query("select noControl from extra where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		$noC=0;	
		while ($f=$re->fetch_array()) { 
		$noC=$f['noControl'];			
	  	} 

		if($_SESSION['noControl']==$noC) {
		echo '<script type="text/javascript"> alert("Ha completado el formulario anterior"); window.location.href="familia.php";</script>';
		}	

}else {
		echo '<script type="text/javascript"> alert("se perdio la sesion"); window.location.href="index.php";</script>';
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Alumno Nuevo</title>
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

<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 12.5%"></div>
</div>	

<section>
<form action="altaAlumno2.php" method = "post" enctype="multipart/form-data" id="agrega">
	
	<br>
		<div id="orden">

<?php 
if (isset($_SESSION['becado']) &&$_SESSION['becado']=='si') {
	?>
<div class="input-group">
	<span class="input-group-text" >becado por</span>
	<select name="institucion" required>
		<option selected disabled value="">----------</option>
		<option value="Gobierno federal">Gobierno federal</option>
		<option value="Gobierno estatal">Gobierno estatal</option>
		<option value="Esfuerzos de bachillerato">Esfuerzos de bachillerato</option>
	</select>
</div>			
<?php  ?>
<div class="input-group">
  <span class="input-group-text">Nombre de la institucion</span>
  <input type="text" class="form-control" placeholder="Institucion" name="nombreInstitucion" id="estudios">
</div>

<?php 	
}
if (isset($_SESSION['trabaja']) &&$_SESSION['trabaja']=='si') {
	?>
<div class="input-group">
  <span class="input-group-text">Nombre de empresa donde trabajas</span>
  <input type="text" class="form-control" placeholder="Empresa" name="nombreEmpresa" id="txtlargo">
</div>

<div class="input-group">
  <span class="input-group-text">Horario</span>
	<select name="horario" required>
		<option selected disabled value="">-----</option>
		<option value="matutino">Matutino</option>
		<option value="vespertino">Vespertino</option>
		<option value="nocturno">Nocturno</option>
	</select>
</div>

<?php } ?>

<span class="input-group-text">Donde realizaste tus estudios de:</span>
<div class="input-group" style="display: block;">
	<input type="text" name="primaria"  placeholder="Primaria" class="form-control" id="estudios">
	<input type="text" name="secundaria"  placeholder="Secundaria" class="form-control" id="estudios">
	<input type="text" name="prepa"  placeholder="Preparatoria" class="form-control" id="estudios">
	<input type="text" name="estudiosSuperiores"  placeholder="Estudios Superiores" class="form-control" id="estudios">
</div>

<div class="input-group">
  <span class="input-group-text">Fecha de nacimiento</span>
  <input type="date" class="form-control" required  name="fechaDeNacimiento" id="fecha">
</div>

<div class="input-group">
  <span class="input-group-text">Lugar de nacimiento</span>
  <input type="text" class="form-control" placeholder="Lugar de nacimiento"  required  name="lugarDeNacimiento" id="estudios">
</div>
	
<div class="input-group">
  <span class="input-group-text">Peso (kg)</span>
  <input type="number" class="form-control" required placeholder="N" required="true" name="peso" id="n2d" min="0">
</div><div class="input-group">
  <span class="input-group-text">Estatura (cm)</span>
  <input type="number" class="form-control" required name="estatura" placeholder="N" required id="n2d" min="0">
</div>

<div class="input-group">
	<span class="input-group-text" >Estado civil</span>
	<select name="estadoCivil" required>
		<option selected disabled value="">-----</option>
		<option value="soltero">Soltero(a)</option>
		<option value="casado">Casado(a)</option>
		<option value="divorciao">Divorciado(a)</option>
		<option value="viudo">Viudo(a)</option>
		<option value="otro">Otro</option>
	</select>
</div><div class="input-group">
  <span class="input-group-text">No. de hijos*</span>
  <input type="number" class="form-control" placeholder="N" name="nHijos" id="n2d" min="0">
</div>


<div class="input-group">
  <span class="input-group-text">Domicilio actual</span>
  <input type="text" class="form-control" placeholder="Domicilio actual"  required="true" name="domicilioActual" id="estudios">
</div>

<div class="input-group">
  <span class="input-group-text">Teléfono domicilio</span>
  <input type="number" class="form-control" placeholder="Teléfono"  required="true" name="telefono" id="tel" min="0">
</div>

<div class="input-group">
  <span class="input-group-text">Tipo de vivienda</span>
	<select name="tipoVivienda" required>
		<option selected disabled value="">-----</option>
		<option value="casa">Casa</option>
		<option value="departamento">Departamento</option>
	</select>
</div>
	
<div class="input-group">
  <span class="input-group-text">La casa o departamento donde vives es</span>
  <select name="viviendaEs" required>
		<option selected disabled value="">-----</option>
		<option value="propia">Propia</option>
		<option value="rentada">Rentada</option>
		<option value="prestada">Prestada</option>
		<option value="otros">Otros</option>
	</select>
</div>			
			
<div class="input-group">
  <span class="input-group-text">No. de personas con las que vives</span>
  <input type="number" class="form-control" placeholder="N"  required name="nPersonas" id="n2d" min="0">
</div>			

<div class="input-group">
  <span class="input-group-text">Parentesco*:</span>
  <input type="text" class="form-control" placeholder="Parentesco"  required name="parentesco" id="estudios">
</div>	

<div class="input-group">
  <span class="input-group-text">En el transcurso de tus estudios viviras:</span>
  <select name="vivira" required>
		<option selected disabled value="">----------</option>
		<option value="con mi familia">Con mi familia</option>
		<option value="con familiares cercanos">Con familiares cercanos</option>
		<option value="con otros estudiantes">Con otros estudiantes</option>
		<option value="solo">Solo</option>
	</select>
</div>		

<div class="input-group">
  <span class="input-group-text" id="ea"> A cuánto ascienden los ingresos mensuales de tu familia $*:</span>
  <input type="number" class="form-control" placeholder="N"   name="ingresoMFamiliar" id="tel" min="0">
</div>	

<div class="input-group">
  <span class="input-group-text" id="ea2">En caso de ser económicamente independiente, ¿a cuánto asciende tu ingreso? $*:</span>
  <input type="number" class="form-control" placeholder="N"   name="tuIngreso" id="tel" min="0">
</div>	

<h4>En caso de accidente avisar a:</h4>
<div class="input-group">
  <span class="input-group-text">Nombre</span>
  <input type="text" class="form-control" placeholder="Nombre completo"   name="avisarNombre" id="correoIn" required>
</div>
<div class="input-group">
  <span class="input-group-text">Teléfono</span>
  <input type="number" class="form-control" placeholder="Teléfono"   name="avisarTelefono" id="tel" min="0" required>
</div>
		<br>
	<input type="submit" name="accion" value="Enviar" id="aceptar" class="btn btn-success"><br>
</form>

</section>
</div>
</center>
</body>
</html>
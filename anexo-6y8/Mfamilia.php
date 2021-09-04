<?php
session_start();
	include "../conexion.php";
if (isset($_SESSION['noControl'])&&$_SESSION['noControl']!=0) {

	
	
	$re3=$mysql->query("select * from hermanos where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		$rh=0;	
		while ($f=$re3->fetch_array()) { 
	  	} 

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Familia</title>
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

<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
</div>	

<section>

	
<form action="altaFamilia.php" method = "post" enctype="multipart/form-data" id="agrega">
	
<br>

<?php 
$re2=$mysql->query("select * from padre where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		while ($f=$re2->fetch_array()) { 
?>

			<h2>PADRE</h2>
<div class="input-group">
  <span class="input-group-text">Nombre completo</span>
  <input type="text" class="form-control" required name="nombreP" placeholder="Nombre" id="estudios" value="<?php echo $f['nombreP'] ?>">
</div>
<div class="input-group">
  <span class="input-group-text"> Máximo grado de escolaridad de</span>
	<select name="gradoP" required>
		<option selected disabled value="">-----</option>
		<option value="primaria">Primaria</option>
		<option value="secundaria">Secundaria</option>
		<option value="preparatoria">Preparatoria</option>
		<option value="tecnica">Tecnica</option>
		<option value="licenciatura">Licenciatura</option>
		<option value="posgrado">Posgrado</option>
		<option value="sin estudios">Sin estudios</option>
	</select>
</div>
<div class="input-group">
  <span class="input-group-text">Edad</span>
  <input type="number" class="form-control" required name="edadP" placeholder="N" id="n2d">

  <span class="input-group-text" style="margin-left: 10px;">Trabaja</span>
	<select name="trabajaP" required>
		<option selected disabled value="">-----</option>
		<option value="si">Si</option>
		<option value="no">No</option>
	</select>
</div>	
<div class="input-group">
  <span class="input-group-text">Profesión*</span>
  <input type="text" class="form-control"  name="profesionP" placeholder="Profesión" id="estudios">
</div>	
<div class="input-group">
  <span class="input-group-text">Tipo de trabajo*</span>
  <input type="text" class="form-control"  name="tipoTrabajoP" placeholder="Tipo" id="estudios">
</div>	
<div class="input-group">
  <span class="input-group-text" > Nombre del lugar de trabajo*</span>
  <input type="text" class="form-control"  name="lugarDeTrabajoP" placeholder="lugar de trabajo" id="estudios">
</div>	
<div class="input-group">
  <span class="input-group-text">Domicilio</span>
  <input type="text" class="form-control" required name="domicilioP" placeholder="Domicilio del padre" id="estudios">
</div>	
<div class="input-group">
  <span class="input-group-text">Teléfono</span>
  <input type="text" class="form-control" required name="telefonoP" placeholder="Teléfono del padre" id="tel">
</div>	

<?php } 
$re=$mysql->query("select * from madre where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		while ($f=$re->fetch_array()) { 
	  	
?>

			<h2>MADRE</h2>
<div class="input-group">
  <span class="input-group-text">Nombre completo</span>
  <input type="text" class="form-control" required name="nombreM" placeholder="Nombre" id="estudios">
</div>	
<div class="input-group">
  <span class="input-group-text"> Máximo grado de escolaridad de</span>
	<select name="gradoM" required>
		<option selected disabled value="">-----</option>
		<option value="primaria">Primaria</option>
		<option value="secundaria">Secundaria</option>
		<option value="preparatoria">Preparatoria</option>
		<option value="tecnica">Tecnica</option>
		<option value="licenciatura">Licenciatura</option>
		<option value="posgrado">Posgrado</option>
		<option value="sin estudios">Sin estudios</option>
	</select>
</div>
<div class="input-group">
  <span class="input-group-text">Edad</span>
  <input type="number" class="form-control" required name="edadM" placeholder="N" id="n2d">

  <span class="input-group-text" style="margin-left: 10px;">Trabaja</span>
	<select name="trabajaM" required>
		<option selected disabled value="">-----</option>
		<option value="si">Si</option>
		<option value="no">No</option>
	</select>
</div>	
<div class="input-group">
  <span class="input-group-text">Profesión*</span>
  <input type="text" class="form-control" name="profesionM" placeholder="Profesión" id="estudios">
</div>	
<div class="input-group">
  <span class="input-group-text">Tipo de trabajo*</span>
  <input type="text" class="form-control"  name="tipoTrabajoM" placeholder="Tipo" id="estudios">
</div>
<div class="input-group">
  <span class="input-group-text" > Nombre del lugar de trabajo*</span>
  <input type="text" class="form-control" name="lugarDeTrabajoM" placeholder="lugar de trabajo" id="estudios">
</div>	
<div class="input-group">
  <span class="input-group-text">Domicilio</span>
  <input type="text" class="form-control" required name="domicilioM" placeholder="Domicilio de la madre" id="estudios">
</div>	
<div class="input-group">
  <span class="input-group-text" id="semestre">Teléfono</span>
  <input type="text" class="form-control" required name="telefonoM" placeholder="Teléfono de la madre" id="tel">
</div>		
	<br>
<?php } ?>

    	<h2>Informacion de Hermanos:</h2>
<?php 
for ($i=1; $i<= $_SESSION['nHermanos'] ; $i++) { 
echo' 
			<h4>Hermano '.$i.'</h4>
			<div class="input-group">
			<span class="input-group-text">Nombre</span>
				<input type="text" name="nombre'.$i.'" class="form-control" placeholder="Nombre" required  id="estudios">
			</div>

			<div class="input-group">
			<span class="input-group-text">Fecha de Nacimiento</span>
				<input type="date" name="fechaNacimiento'.$i.'" class="form-control" id="fecha">
			</div>
			
			<div class="input-group">
			<span class="input-group-text">Sexo</span>
				<select name="sexo'.$i.'" >
				<option selected disabled value="">-----</option>
					<option value="H">H</option>
					<option value="F">F</option>
				</select>
			</div>
			
			<div class="input-group">
			<span class="input-group-text">Estudios</span>
			<select name="estudios'.$i.'" required>
		<option selected disabled value="">-----</option>
		<option value="primaria">Primaria</option>
		<option value="secundaria">Secundaria</option>
		<option value="preparatoria">Preparatoria</option>
		<option value="tecnica">Tecnica</option>
		<option value="licenciatura">Licenciatura</option>
		<option value="posgrado">Posgrado</option>
		<option value="sin estudios">Sin estudios</option>
			</select>
			</div>
			
			<div class="input-group">
			<span class="input-group-text">Relacion</span>
			<select name="comoRelacion'.$i.'" >
				<option value="">-----</option>
				<option value="buena">Bien</option>
				<option value="regular">Regular</option>
				<option value="mala">Mal</option>
				<option value="complicado">Complicado</option>
			</select>
			</div>
			
			<div class="input-group">
			<span class="input-group-text">Actitud</span>
				<input type="text" name="actitudCon'.$i.'" class="form-control"  placeholder="Actitud"  id="txtlargo">
			</div>
			
';


}
?>

		

	<?php echo '<input type="hidden" name="noControl" value="'.$_SESSION['noControl'].'" > ';?>

		<br>
		<input type="submit" name="accion"  value="Enviar" id="aceptar" class="btn btn-success">
	</form>
</section>
</div>
</center>
</body>
</html>
<?php } ?>
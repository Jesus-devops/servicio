<?php
session_start();
	include "../conexion.php";
if (isset($_SESSION['noControl'])&&$_SESSION['noControl']!=0) {

?>
<!DOCTYPE html>
<html lang="es"  class="modificarinfo">
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
<section>

<form action="MaltaFamilia.php" method = "post" enctype="multipart/form-data" id="agrega">


<?php 
$pa=""; $ma="";
$re11=$mysql->query("select padre, madre from alumno where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		while ($f=$re11->fetch_array()) { 
			$pa=$f['padre']; $ma=$f['madre'];
			$_SESSION['padre']=$f['padre'];
			$_SESSION['madre']=$f['madre'];
		}

if ($ma=='finado' && $pa=='finado') {
echo "<h2>No hay manera de editar datos de padre y madre, modique la informacion de alumno sobre padre y madre.</h2>
";}

if ($pa=='vive') {
	


			$nombreP=""; $edadP=""; $maxEscolaridadP=""; $trabajaP=""; $profesionP=""; $lugarDeTrabajoP=""; $tipoTrabajoP=""; $domicilioP=""; $telefonoP=""; 

$re2=$mysql->query("select * from padre where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		while ($f=$re2->fetch_array()) { 
			$nombreP=$f['nombreP']; $edadP=$f['edadP']; $maxEscolaridadP=$f['maxEscolaridadP']; $trabajaP=$f['trabajaP'];  $profesionP=$f['profesionP']; $lugarDeTrabajoP=$f['lugarDeTrabajoP']; $tipoTrabajoP=$f['tipoTrabajoP']; $domicilioP=$f['domicilioP'];$telefonoP=$f['telefonoP'];
		}
?> 
			<h2>PADRE</h2>
<div class="input-group">
  <span class="input-group-text">Nombre completo</span>
  <input type="text" class="form-control" required name="nombreP" placeholder="Nombre" id="estudios" value="<?php echo $nombreP ?>">
</div>
<div class="input-group">
  <span class="input-group-text"> Máximo grado de escolaridad de</span>
	<select name="maxEscolaridadP" required>
		<option selected disabled value="">-----</option>
		<option value="primaria" <?php if ( $maxEscolaridadP=="primaria"){echo "selected"; }?>>Primaria</option>
		<option value="secundaria" <?php if ( $maxEscolaridadP=="secundaria"){echo "selected"; }?>>Secundaria</option>
		<option value="preparatoria" <?php if ( $maxEscolaridadP=="preparatoria"){echo "selected"; }?>>Preparatoria</option>
		<option value="tecnica" <?php if ( $maxEscolaridadP=="tecnica"){echo "selected"; }?>>Tecnica</option>
		<option value="licenciatura" <?php if ( $maxEscolaridadP=="licenciatura"){echo "selected"; }?>>Licenciatura</option>
		<option value="posgrado" <?php if ( $maxEscolaridadP=="posgrado"){echo "selected"; }?>>Posgrado</option>
		<option value="sin estudios" <?php if ( $maxEscolaridadP=="sin estudios"){echo "selected"; }?>>Sin estudios</option>
	</select>
</div>
<div class="input-group">
  <span class="input-group-text">Edad</span>
  <input type="number" class="form-control" required name="edadP" placeholder="N" id="n2d" value="<?php echo $nombreP ?>">

  <span class="input-group-text" style="margin-left: 10px;">Trabaja</span>
	<select name="trabajaP" required>
		<option selected disabled value="">-----</option>
		<option value="si" <?php if ( $trabajaP=="si"){echo "selected"; }?>>Si</option>
		<option value="no" <?php if ( $trabajaP=="no"){echo "selected"; }?>>No</option>
	</select>
</div>	
<div class="input-group">
  <span class="input-group-text">Profesión*</span>
  <input type="text" class="form-control"  name="profesionP" placeholder="Profesión" id="estudios" value="<?php echo $profesionP ?>">
</div>	
<div class="input-group">
  <span class="input-group-text">Tipo de trabajo*</span>
  <input type="text" class="form-control"  name="tipoTrabajoP" placeholder="Tipo" id="estudios" value="<?php echo $tipoTrabajoP ?>">
</div>	
<div class="input-group">
  <span class="input-group-text" > Nombre del lugar de trabajo*</span>
  <input type="text" class="form-control"  name="lugarDeTrabajoP" placeholder="lugar de trabajo" id="estudios" value="<?php echo $lugarDeTrabajoP ?>">
</div>	
<div class="input-group">
  <span class="input-group-text">Domicilio padre</span>
  <input type="text" class="form-control" required name="domicilioP" placeholder="Domicilio del padre" id="estudios" value="<?php echo $domicilioP ?>">
</div>	
<div class="input-group">
  <span class="input-group-text">Teléfono padre</span>
  <input type="text" class="form-control" required name="telefonoP" placeholder="Teléfono del padre" id="tel" value="<?php echo $telefonoP ?>">
</div>	

<?php 

}
if ($ma=='vive') {

			$nombreM=""; $edadM=""; $maxEscolaridadM=""; $trabajaM=""; $profesionM=""; $lugarDeTrabajoM=""; $tipoTrabajoM=""; $domicilioM=""; $telefonoM=""; 

$re3=$mysql->query("select * from madre where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		while ($f=$re3->fetch_array()) { 
			$nombreM=$f['nombreM']; $edadM=$f['edadM']; $maxEscolaridadM=$f['maxEscolaridadM']; $trabajaM=$f['trabajaM'];  $profesionM=$f['profesionM']; $lugarDeTrabajoM=$f['lugarDeTrabajoM']; $tipoTrabajoM=$f['tipoTrabajoM']; $domicilioM=$f['domicilioM'];$telefonoM=$f['telefonoM'];
		}
?> 

			<h2>MADRE</h2>
<div class="input-group">
  <span class="input-group-text">Nombre completo</span>
  <input type="text" class="form-control" required name="nombreM" placeholder="Nombre" id="estudios" value="<?php echo $nombreM ?>">
</div>	
<div class="input-group">
  <span class="input-group-text"> Máximo grado de escolaridad de</span>
	<select name="maxEscolaridadM" required>
		<option selected disabled value="">-----</option>
		<option value="primaria" <?php if ( $maxEscolaridadM=="primaria"){echo "selected"; }?>>Primaria</option>
		<option value="secundaria" <?php if ( $maxEscolaridadM=="secundaria"){echo "selected"; }?>>Secundaria</option>
		<option value="preparatoria" <?php if ( $maxEscolaridadM=="preparatoria"){echo "selected"; }?>>Preparatoria</option>
		<option value="tecnica" <?php if ( $maxEscolaridadM=="tecnica"){echo "selected"; }?>>Tecnica</option>
		<option value="licenciatura" <?php if ( $maxEscolaridadM=="licenciatura"){echo "selected"; }?>>Licenciatura</option>
		<option value="posgrado" <?php if ( $maxEscolaridadM=="posgrado"){echo "selected"; }?>>Posgrado</option>
		<option value="sin estudios" <?php if ( $maxEscolaridadM=="sin estudios"){echo "selected"; }?>>Sin estudios</option>
	</select>
</div>
<div class="input-group">
  <span class="input-group-text">Edad</span>
  <input type="number" class="form-control" required name="edadM" placeholder="N" id="n2d" value="<?php echo $edadM ?>">

  <span class="input-group-text" style="margin-left: 10px;">Trabaja</span>
	<select name="trabajaM" required>
		<option selected disabled value="">-----</option>
		<option value="si" <?php if ( $trabajaM=="si"){echo "selected"; }?>>Si</option>
		<option value="no" <?php if ( $trabajaM=="no"){echo "selected"; }?>>No</option>
	</select>
</div>	
<div class="input-group">
  <span class="input-group-text">Profesión*</span>
  <input type="text" class="form-control" name="profesionM" placeholder="Profesión" id="estudios" value="<?php echo $profesionM ?>">
</div>	
<div class="input-group">
  <span class="input-group-text">Tipo de trabajo*</span>
  <input type="text" class="form-control"  name="tipoTrabajoM" placeholder="Tipo" id="estudios" value="<?php echo $tipoTrabajoM ?>">
</div>
<div class="input-group">
  <span class="input-group-text" > Nombre del lugar de trabajo*</span>
  <input type="text" class="form-control" name="lugarDeTrabajoM" placeholder="lugar de trabajo" id="estudios" value="<?php echo $lugarDeTrabajoM ?>">
</div>	
<div class="input-group">
  <span class="input-group-text">Domicilio madre</span>
  <input type="text" class="form-control" required name="domicilioM" placeholder="Domicilio de la madre" id="estudios" value="<?php echo $domicilioM ?>">
</div>	
<div class="input-group">
  <span class="input-group-text" id="semestre">Teléfono madre</span>
  <input type="text" class="form-control" required name="telefonoM" placeholder="Teléfono de la madre" id="tel" value="<?php echo $telefonoP ?>">
</div>		

	<?php 
}




	echo '<input type="hidden" name="noControl" value="'.$_SESSION['noControl'].'" > ';?>

		<input type="submit" name="accion"  value="Enviar" id="aceptar" class="btn btn-success">	<br>

	</form>
</section>
</div>
</center>
</body>
</html>
<?php } ?>
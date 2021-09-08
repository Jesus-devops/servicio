<?php
session_start();
	include "../conexion.php";
if (isset($_SESSION['noControl'])&&$_SESSION['noControl']!=0) {

$re=$mysql->query("select noControl from areafamiliarysocial where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		$noC=0;	
		while ($f=$re->fetch_array()) { 
		$noC=$f['noControl'];			
	  	} 

		if($_SESSION['noControl']==$noC) {
		echo '<script type="text/javascript"> alert("Ha completado el formulario anterior"); window.location.href="psicopedagogica.php";</script>';
		}
	}else{
		echo '<script type="text/javascript"> alert("se perdio la sesion"); window.location.href="index.php";</script>';
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Area Familiar</title>
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
	
<section>

	<form action="altaAreaFamiliar.php" method = "post" enctype="multipart/form-data" id="agrega">
		
        <h2>Información Familiar </h2>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 37.5%"></div>
</div>
<br>


        <?php
        if (isset($_SESSION['noControl'])) {
         	echo '<input type="hidden" name="noControl" value="'.$_SESSION['noControl'].'" > ';
         } ?>

<div class="input-group">
  <span class="input-group-text">¿Cómo es la relación con tu familia?</span>
  <select name="relacionFamilia" required>
		<option selected disabled value="">-----</option>
		<option value="buena">Buena</option>
		<option value="regular">Regular</option>
		<option value="mala">Mala</option>
		<option value="complicado">Complicado</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">¿Existen dificultades?</span>
  <select name="dificultades" required>
		<option selected disabled value="">-----</option>
		<option value="si">Si</option>
		<option value="no">No</option>
	</select> 
</div>

<div class="input-group">
  <span class="input-group-text">¿De qué tipo?</span>
  <input type="text" class="form-control" placeholder="Tipo"  name="tipoDificultad" id="txtmedio">
</div>


<div class="input-group">
  <span class="input-group-text">¿Qué actitudes tienes con tu familia?</span>
  <input type="text" class="form-control" placeholder="Actitud"  required name="actitudFamilia" id="txtlargo">
</div>

<?php 
if (isset($_SESSION['padre'])) {
if ($_SESSION['padre']=='vive') {
 ?>

<div class="input-group">
  <span class="input-group-text">¿Cómo te relacionas con tu Padre?</span>
  <select name="relacionP" >
		<option selected disabled value="">-----</option>
		<option value="buena">Bien</option>
		<option value="regular">Regular</option>
		<option value="mala">Mal</option>
		<option value="complicado">Complicado</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">¿Qué actitud tienes hacia tu Padre?</span>
  <input type="text" class="form-control" placeholder="Actitud"   name="actitudP" id="txtlargo">
</div>

<?php 
}else{
	 ?>
  <input type="hidden" name="relacionP" value="">
  <input type="hidden" name="actitudP" value="">
	 <?php 
}
} if (isset($_SESSION['madre'])) {
if ($_SESSION['madre']=='vive') {
 ?>

<div class="input-group">
  <span class="input-group-text">¿Cómo te relacionas con tu Madre?</span>
  <select name="relacionM" >
		<option selected disabled value="">-----</option>
		<option value="buena">Bien</option>
		<option value="regular">Regular</option>
		<option value="mala">Mal</option>
		<option value="complicado">Complicado</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">¿Qué actitud tienes hacia tu Madre?</span>
  <input type="text" class="form-control" placeholder="Actitud"   name="actitudM" id="txtlargo">
</div>
<?php 
}else{
	 ?>
  <input type="hidden" name="relacionM" value="">
  <input type="hidden" name="actitudM" value="">
	 <?php 
}
}
?>

<div class="input-group">
  <span class="input-group-text">¿Con quién te sientes más ligado afectivamente?</span>

<?php 

if (isset($_SESSION['padre'])&&isset($_SESSION['madre'])&&isset($_SESSION['nHermanos'])) {

if ($_SESSION['padre']=='finado'&&$_SESSION['madre']=='finado'&&$_SESSION['nHermanos']<=0) {
?>	
  <input type="text" class="form-control" placeholder="Tipo"  name="ligadoAfectivamente" id="txtmedio">
<?php
}else if ($_SESSION['padre']=='finado'&&$_SESSION['madre']=='finado'&&$_SESSION['nHermanos']>0) {
?>	
  <select name="ligadoAfectivamente" required>
		<option selected disabled value="">-----</option>
		<option value="hermanos">Hermanos</option>
		<option value="otros">Otros</option>
	</select>

<?php
}
else if ($_SESSION['padre']=='finado'&&$_SESSION['madre']=='vive'&&$_SESSION['nHermanos']<=0) {
 ?>
  <select name="ligadoAfectivamente" required>
		<option selected disabled value="">-----</option>
		<option value="madre">Madre</option>
		<option value="otros">Otros</option>
	</select>
<?php
}

else if ($_SESSION['padre']=='finado'&&$_SESSION['madre']=='vive'&&$_SESSION['nHermanos']>0) {
 ?>
  <select name="ligadoAfectivamente" required>
		<option selected disabled value="">-----</option>
		<option value="madre">Madre</option>
		<option value="hermanos">Hermanos</option>
		<option value="otros">Otros</option>
	</select>
<?php
}
else if ($_SESSION['padre']=='vive'&&$_SESSION['madre']=='finado'&&$_SESSION['nHermanos']<=0) {
 ?>
  <select name="ligadoAfectivamente" required>
		<option selected disabled value="">-----</option>
		<option value="padre">Padre</option>
		<option value="otros">Otros</option>
	</select>

<?php
}
else if ($_SESSION['padre']=='vive'&&$_SESSION['madre']=='finado'&&$_SESSION['nHermanos']>0) {
 ?>
  <select name="ligadoAfectivamente" required>
		<option selected disabled value="">-----</option>
		<option value="padre">Padre</option>
		<option value="hermanos">Hermanos</option>
		<option value="otros">Otros</option>
	</select>
 <?php
 }
else if ($_SESSION['padre']=='vive'&&$_SESSION['madre']=='vive'&&$_SESSION['nHermanos']<=0) {
 ?>
  <select name="ligadoAfectivamente" required>
		<option selected disabled value="">-----</option>
		<option value="madre">Madre</option>
		<option value="padre">Padre</option>
		<option value="otros">Otros</option>
	</select>
<?php
}else{ ?>
  <select name="ligadoAfectivamente" required>
		<option selected disabled value="">-----</option>
		<option value="madre">Madre</option>
		<option value="padre">Padre</option>
		<option value="hermanos">Hermanos</option>
		<option value="otros">Otros</option>
	</select>

 <?php
} 
}
?>	

</div>

<div class="input-group">
  <span class="input-group-text">Especifique porque</span>
  <input type="text" class="form-control" placeholder="Especifique"  required name="ligadoPorque" id="txtmedio">
</div>

<div class="input-group">
  <span class="input-group-text">¿Quién se ocupa  más directamente de tu educación?</span>
  <input type="text" class="form-control"  required name="tuEducacion" id="txtcorto">
</div>

<div class="input-group">
  <span class="input-group-text">¿Quién ha influido más en tu decisión para estudiar esta carrera?</span>
  <input type="text" class="form-control"  required name="decision" id="txtcorto">
</div>

<div class="input-group">
  <span class="input-group-text">Consideras importante facilitar algún otro dato sobre tu ambiente familiar</span>
  <input type="text" class="form-control" placeholder="algún otro dato"   name="otroDato" id="estudios">
</div>

        <h2>Información Social</h2>
<br>
		<?php
			if (isset($_SESSION['noControl'])) {
				echo '<input type="hidden" name="noControl" value="'.$_SESSION['noControl'].'" > ';
			}?>

<div class="input-group">
  <span class="input-group-text">¿Cómo es tu relación con tus compañeros?</span>
  <select name="companerosR" required>
		<option selected disabled value="">-----</option>
		<option value="buena">Buena</option>
		<option value="regular">Regular</option>
		<option value="mala">Mala</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text" >¿Por qué?</span>
  <input type="text" class="form-control" required id="correoIn" placeholder="¿Por qué?" name="companerosPorque" >
</div>		

<div class="input-group">
  <span class="input-group-text">¿Cómo es tu relación con tus amigos?</span>
  <select name="amigosR" required>
		<option selected disabled value="">-----</option>
		<option value="buena">Buena</option>
		<option value="regular">Regular</option>
		<option value="mala">Mala</option>
		<option value="complicada">Complicada</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">¿Tienes Pareja?</span>
  <select name="tienePareja" required>
		<option selected disabled value="">-----</option>
		<option value="si">Si</option>
		<option value="no">No</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">¿Cómo es tu relación con tu pareja?</span>
  <select name="parejaR">
		<option selected disabled value="">-----</option>
		<option value="buena">Buena</option>
		<option value="regular">Regular</option>
		<option value="mala">Mala</option>
		<option value="complicada">Complicada</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">¿Cómo es tu relación con tus profesores?</span>
  <select name="profesoresR" required>
		<option selected disabled value="">-----</option>
		<option value="buena">Buena</option>
		<option value="regular">Regular</option>
		<option value="mala">Mala</option>
		<option value="complicada">Complicada</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">¿Cómo es tu relación con las autoridades académicas?</span>
  <select name="autoridadesR" required>
		<option selected disabled value="">-----</option>
		<option value="buena">Buena</option>
		<option value="regular">Regular</option>
		<option value="mala">Mala</option>
		<option value="complicada">Complicada</option>
	</select>
	</select> 
</div>

<div class="input-group">
  <span class="input-group-text">¿Qué haces en tu tiempo libre?</span>
  <input type="text" class="form-control" placeholder="Tiempo libre"  name="tiempoLibre" id="correoIn" required>
</div>			

<div class="input-group">
  <span class="input-group-text">¿Cuál es tu actividad recreativa?</span>
  <input type="text" class="form-control" placeholder="Actividad"  name="actividades" id="correoIn" required>
</div>				

		<br>
<br>
		<input type="submit" name="accion" value="Enviar" id="aceptar" class="btn btn-success">
	</form>
	<br>
</section>
</div>
</center>
</body>
</html>
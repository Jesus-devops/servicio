<!DOCTYPE html>
<html lang="es"  class="modificarinfo">

  <?php
session_start();
include "../conexion.php";

if (isset($_SESSION['noControl'])&&$_SESSION['noControl']!=0) {

?>
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
<header><img src="../logo.png" id="logo"></header>
<ul class="nav nav" style="margin: 5px; display: block;">
  	<li class="nav-item">
   	 	<a class="btn btn-primary" href="../index.php" >Página principal</a>
		<a class="btn btn-primary" href="MenuM.php" >Menú editar alumno</a>
  	</li>
</ul>	

<section>


<form action="MaltaAlumno1.php" method = "post" enctype="multipart/form-data" id="agrega">
<div id="orden">
	<h2> BIENVENIDO</h2>
	<br>

<?php  
$re=$mysql->query("select * from alumno where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		while ($f=$re->fetch_array()) { 
		$f['noControl'];	
?>
	
<div class="input-group">
  <span class="input-group-text">No. Control</span>
  <input type="number" class="form-control" placeholder="No. Control" id="noC" name="noControl" required value=<?php echo $f['noControl'];?>>
</div>
<div class="input-group">
  <span class="input-group-text" style="margin-left: 15px;">Semestre</span>
<select name="semestre" required="true" > 
		<option selected disabled >-----</option>
		<option value="1" <?php  if ($f['semestre']==1) {echo 'selected';}?>>1</option>
		<option value="2" <?php  if ($f['semestre']==2) {echo 'selected';}?>>2</option>
		<option value="3" <?php  if ($f['semestre']==3) {echo 'selected';}?>>3</option>
		<option value="4" <?php  if ($f['semestre']==4) {echo 'selected';}?>>4</option>
		<option value="5" <?php  if ($f['semestre']==5) {echo 'selected';}?>>5</option>
		<option value="6" <?php  if ($f['semestre']==6) {echo 'selected';}?>>6</option>
		<option value="7" <?php  if ($f['semestre']==7) {echo 'selected';}?>>7</option>
		<option value="8" <?php  if ($f['semestre']==8) {echo 'selected';}?>>8</option>
		<option value="9" <?php  if ($f['semestre']==9) {echo 'selected';}?>>9</option>
		<option value="10" <?php  if ($f['semestre']==10) {echo 'selected';}?>>10</option>
		<option value="11" <?php  if ($f['semestre']==11) {echo 'selected';}?>>11</option>
		<option value="12" <?php  if ($f['semestre']==12) {echo 'selected';}?>>12</option>	
		<option value="13" <?php  if ($f['semestre']==13) {echo 'selected';}?>>13</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text" style="margin-left: 15px;">Grupo</span>
	<select name="grupo" required style="margin: 0px;"> 
		<option selected disabled >-----</option>
		<option value="A" <?php  if ($f['grupo']=="A") {echo 'selected';}?>>A</option>
		<option value="C" <?php  if ($f['grupo']=="C") {echo 'selected';}?>>C</option>
		<option value="F" <?php  if ($f['grupo']=="F") {echo 'selected';}?>>F</option>
		<option value="G" <?php  if ($f['grupo']=="G") {echo 'selected';}?>>G</option>
		<option value="H" <?php  if ($f['grupo']=="H") {echo 'selected';}?>>H</option>
		<option value="I" <?php  if ($f['grupo']=="I") {echo 'selected';}?>>I</option>
		<option value="J" <?php  if ($f['grupo']=="J") {echo 'selected';}?>>J</option>
		<option value="M" <?php  if ($f['grupo']=="M") {echo 'selected';}?>>M</option>
	</select>
<span class="input-group-text" style="margin-left: 15px;">Turno</span>
	<select name="turno"  required> 
		<option selected disabled >-----</option>
		<option value="" <?php  if ($f['turno']=="") {echo 'selected';}?>></option>
		<option value="Bis" <?php  if ($f['turno']=="Bis") {echo 'selected';}?>>Bis</option>
	</select>


  

</div>

<div class="input-group">
	<span class="input-group-text">Carrera a la que pertenece</span>
	<select name="carrera" required>
		<option selected disabled value="">----------</option>
		<option value="administracion" <?php  if ($f['carrera']=="administracion") {echo 'selected';}?>>Administracion</option>
		<option value="bioquimica" <?php  if ($f['carrera']=="bioquimica") {echo 'selected';}?>>Bioquimica</option>
		<option value="gestion" <?php  if ($f['carrera']=="gestion") {echo 'selected';}?>>Gestion empresarial</option>
		<option value="industrial" <?php  if ($f['carrera']=="industrial") {echo 'selected';}?>>Industrial</option>
		<option value="mecatronica" <?php  if ($f['carrera']=="mecatronica") {echo 'selected';}?>>Mecatronica</option>
		<option value="sistemas" <?php  if ($f['carrera']=="sistemas") {echo 'selected';}?>>Sistemas computacionales</option>
		<option value="tics" <?php  if ($f['carrera']=="tics") {echo 'selected';}?>>Tics</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">Nombre</span>
  <input type="text" class="form-control" required="true" name="apellidoP"placeholder="Apellido Paterno" required id="noC" value="<?php echo $f['apellidoP'] ?>">
  <input type="text" class="form-control" required="true" name="apellidoM"placeholder="Apellido Materno" required id="noC" value="<?php echo $f['apellidoM'] ?>">
  <input type="text" class="form-control" required="true" name="nombres" placeholder="Nombres" required="true" id="txtmedio" value="<?php echo $f['nombres'] ?>">

</div>

<!––Fecha actual-->


<div class="input-group">
  <span class="input-group-text">Edad</span>
  <input type="number" class="form-control" placeholder="N"  required="true" name="edad" id="n2d" min="17" max="100"value="<?php echo $f['edad'] ?>">

	<span class="input-group-text" style="margin-left: 15px;">Sexo</span>
	<select name="sexo" required>
		<option selected disabled value="">-----</option>
		<option value="H"<?php  if ($f['sexo']=="H") {echo 'selected';}?>>H</option>
		<option value="M"<?php  if ($f['sexo']=="M") {echo 'selected';}?>>M</option>
	</select>
</div>

<div class="input-group" id="largo">
  <span class="input-group-text">Correo electrónico</span>
  <input type="email" class="form-control" placeholder="ejemplo@outlook.com"  required="true" name="email" id="estudios" value="<?php echo $f['email'] ?>">
</div>



<div class="input-group">
  <span class="input-group-text">Código Postal</span>
  <input type="number" class="form-control" placeholder="Código"  required="true" name="CP" id="noC" value="<?php echo $f['CP'] ?>">
</div>

<div class="input-group">
  <span class="input-group-text">Escolaridad</span>
	<select name="escolaridad" required>
		<option selected disabled value="">----------</option>
		<option value="Preparatoria"<?php if($f['escolaridad']=="Preparatoria"){echo 'selected';}?>>Preparatoria</option>
		<option value="BachTecnico"<?php if($f['escolaridad']=="BachTecnico"){echo 'selected';}?>>Bachillerato tecnico</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">Nombre de la institución</span>
  <input type="text" class="form-control" placeholder="Nombre"  required="true" name="nombreInstitucion" id="estudios" value="<?php echo $f['nombreInstitucion'] ?>">
</div>

<div class="input-group">
	<span class="input-group-text">¿Trabajas?</span>
	<select name="trabaja" required>
		<option selected disabled value="">-----</option>
		<option value="si"<?php if($f['trabaja']=="si"){echo 'selected';}?>>SI</option>
		<option value="no"<?php if($f['trabaja']=="no"){echo 'selected';}?>>NO</option>
	</select>
</div>

<h4>Actualmente tu: </h4>
<div class="input-group">
	<span class="input-group-text">Padre</span>
	<select name="padre" required>
		<option selected disabled value="">-----</option>
		<option value="vive" <?php if($f['padre']=="vive"){echo 'selected';}?>>VIVE</option>
		<option value="finado" <?php if($f['padre']=="finado"){echo 'selected';}?>>FINADO</option>
	</select>

	<span class="input-group-text" style="margin-left: 15px;">Madre</span>
	<select name="madre" required>
		<option selected disabled value="">-----</option>
		<option value="vive" <?php if($f['madre']=="vive"){echo 'selected';}?>>VIVE</option>
		<option value="finado" <?php if($f['madre']=="finado"){echo 'selected';}?>>FINADO</option>
	</select>
</div>

<div class="input-group">
  <span class="input-group-text">¿Has estado becado?</span>
  <select name="becado" required>
		<option selected disabled value="">-----</option>
		<option value="si" <?php if($f['becado']=="si"){echo 'selected';}?>>SI</option>
		<option value="no" <?php if($f['becado']=="no"){echo 'selected';}?>>NO</option>
	</select>
</div>			
	
<?php 
	}
$re2=$mysql->query("select * from celular where noControl=".$_SESSION['noControl'])or die($mysql-> error);
$c1=0;$c2=0;

while ($g=$re2->fetch_array()) { $c1=$g['celular1']; $c2=$g['celular2'];}

?>
<h5>Telefono de contacto para el alumno: </h5>
<div class="input-group">
  <span class="input-group-text">Celular 1*</span>
  <input type="number" class="form-control" placeholder="Celular 1" name="celular1" id="tel"value=<?php echo $c1; ?>>
  <div class="input-group">
</div>
  <span class="input-group-text">Celular 2</span>
  <input type="number" class="form-control" placeholder="Celular 2" name="celular2" id="tel"value=<?php echo $c2;  ?>>
</div>
<?php ?>

</div>
	

		<input type="submit" name="accion" value="Enviar" id="aceptar" class="btn btn-success">
	</form>

<br>



</section>
</div>
</center>
</body>


<?php }  ?>

</html>
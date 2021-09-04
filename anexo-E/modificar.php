<?php 
include ("../conexion.php");
session_start();
if (isset($_POST['noControl'])) {
	$re=$mysql->query("select * from anexoe where noControl =".$_POST['noControl']." ")or die($mysql-> error);
	$n=0;			
	while ($f=$re->fetch_array()) {
		$n=$f['noControl'];
	}
	if ($n>0) {	

	$re=$mysql->query("select * from anexoe ae join alumno a on a.noControl=ae.noControl where a.noControl=".$_POST['noControl']." ")or die($mysql-> error);
		while ($f=$re->fetch_array()) { 			
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Anexo E</title>
	<link rel="shortcut icon" href="../icono.png"/>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >
</head>	

<body>
<center>
<header class="tipoModificar"><a href="index.php"><img src="../logo.png" id="logo"></a></header>
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
		<a class="nav-link" href="index.php">Agregar</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="../login/cerrar.php">Cerrar sesion</a>
	</li>
</ul>	
	</header> 
<?php } ?>

<div id="contenedor">


<section>
<form action="modificarAlumno.php" method = "post" enctype="multipart/form-data" id="agrega" class="tipoModificar">

	<div id="orden">
	<h2>MODIFICAR</h2>


<?php echo 'NO. CONTROL: '.$f['noControl'].'<input type="hidden" name="noControl" value="'.$f['noControl'].' "> <br>';
   ?> 
<br>
  <div class="input-group" >
  <span class="input-group-text">NOMBRE:</span>
  <input type="text" style="width: 22%;text-align: center;"  required class="form-control" placeholder="NNN" id="n3d" name="creditosAcu"  <?php echo 'value="'.$f['apellidoP'].'"'; ?>>
<input type="text" style="width: 22%;text-align: center;"  required class="form-control" placeholder="NNN" id="n3d" name="creditosAcu"  <?php echo 'value="'.$f['apellidoM'].'"'; ?>>
<input type="text" style="width: 22%;text-align: center;" required class="form-control" placeholder="NNN" id="n3d" name="creditosAcu"  <?php echo 'value="'.$f['nombres'].'"'; ?>>

</div>

   <div class="input-group" >
  <span class="input-group-text">CREDITOS ACUMULADOS:</span>
  <input type="number" required class="form-control" placeholder="NNN" id="n3d" name="creditosAcu"  <?php echo 'value="'.$f['creditosAcumulados'].'"'; ?>>
</div>
   	<span class="input-group-text">INGLES: NIVEL CURSADO</span>
	<div class="input-group">
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" name="i1"value="1" <?php  if ($f['n1']==1) {echo 'checked';}?> >
			<label class="form-check-label" for="i1">1</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="checkbox" name="i2" value="1" <?php  if ($f['n2']==1) {echo 'checked';}?> >
			<label class="form-check-label" for="i2">2</label>
		</div>
		<div class="form-check form-check-inline">
 			<input class="form-check-input" type="checkbox" name="i3" value="1" <?php  if ($f['n3']==1) {echo 'checked';}?> >
 			<label class="form-check-label" for="i3">3</label>
		</div>
		<div class="form-check form-check-inline">
  			<input class="form-check-input" type="checkbox" name="i4" value="1" <?php  if ($f['n4']==1) {echo 'checked';}?> >
  			<label class="form-check-label" for="i4">4</label>
		</div>
		<div class="form-check form-check-inline">
  			<input class="form-check-input" type="checkbox" name="i5" value="1" <?php  if ($f['n5']==1) {echo 'checked';}?> >
  			<label class="form-check-label" for="i5">5</label>
		</div>
		<div class="form-check form-check-inline">
  			<input class="form-check-input" type="checkbox" name="i6" value="1" <?php  if ($f['n6']==1) {echo 'checked';}?> >
  			<label class="form-check-label" for="i6">6</label>
		</div>
		<div class="form-check form-check-inline">
  			<input class="form-check-input" type="checkbox" name="i7" value="1" <?php  if ($f['n7']==1) {echo 'checked';}?> >
  			<label class="form-check-label" for="i7">7</label>
		</div>
		<div class="form-check form-check-inline">
  			<input class="form-check-input" type="checkbox" name="i8" value="1" <?php  if ($f['n8']==1) {echo 'checked';}?> >
  			<label class="form-check-label" for="i8">8</label>
		</div>
		<div class="form-check form-check-inline">
  			<input class="form-check-input" type="checkbox" name="i9" value="1" <?php  if ($f['n9']==1) {echo 'checked';}?> >
  			<label class="form-check-label" for="i9">9</label>
		</div>
		<div class="form-check form-check-inline">
  			<input class="form-check-input" type="checkbox" name="i10" value="1" <?php  if ($f['n10']==1) {echo 'checked';}?> >
  			<label class="form-check-label" for="i10">10</label>
		</div>
	</div>

	<div class="input-group">
		<span class="input-group-text">SERVICIO SOCIAL</span>
		<select name="servicioSocial" required>
			<option selected disabled value="">-----</option>
			<option value="si" <?php if($f['servicioSocial']=="si"){echo 'selected';}?>>Si</option>
			<option value="no" <?php if($f['servicioSocial']=="no"){echo 'selected';}?>>No</option>
		</select>
	</div>

	<div class="input-group" id="largo">
 		<span class="input-group-text">RESIDENCIAS PROFESIONALES</span>
  		<select name="residenciasPro" required>
			<option selected disabled value="">-----</option>
			<option value="si" <?php if($f['residenciasPro']=="si"){echo 'selected';}?> >Si</option>
			<option value="no" <?php if($f['residenciasPro']=="no"){echo 'selected';}?> >No</option>
		</select>
	</div>

  	<span class="input-group-text">OTROS CREDITOS</span>
	<div class="input-group">
		<div class="form-check form-check-inline" id="cre">
  			<label class="form-check-label" for="oc1">C</label>
  			<input class="form-control" type="number" name="oc1"
  			 <?php if ($f['C']>0){echo 'value="'.$f['C'].'"';}?>  id="n3d" min="0" max="2" step=".5">
		</div>
		<div class="form-check form-check-inline" id="cre">
  			<label class="form-check-label" for="oc2">CIT</label>
  			<input class="form-control" type="number" name="oc2"
  			 <?php if ($f['CIT']>0){echo 'value="'.$f['CIT'].'"';}?>  id="n3d" min="0" max="2" step=".5">
		</div>
		<div class="form-check form-check-inline" id="cre">
  			<label class="form-check-label" for="oc3">PDS</label>
  			<input class="form-control" type="number" name="oc3"
  			 <?php if ($f['PDS']>0){echo 'value="'.$f['PDS'].'"';}?>  id="n3d" min="0" max="2" step=".5">
		</div>
		<div class="form-check form-check-inline" id="cre">
  			<label class="form-check-label" for="oc4">PD</label>
  			<input class="form-control" type="number" name="oc4"
  			 <?php if ($f['PD']>0){echo 'value="'.$f['PD'].'"';}?>  id="n3d" min="0" max="2" step=".5">
		</div>
		<div class="form-check form-check-inline" id="cre">
  			<label class="form-check-label" for="oc5">AE</label>
  			<input class="form-control" type="number" name="oc5"
  			 <?php if ($f['AE']>0){echo 'value="'.$f['AE'].'"';}?>  id="n3d" min="0" max="2" step=".5">
		</div>
		<div class="form-check form-check-inline" id="cre">
  			<label class="form-check-label" for="oc6">CCB</label>
  			<input class="form-control" type="number" name="oc6"
  			 <?php if ($f['CCB']>0){echo 'value="'.$f['CCB'].'"';}?>  id="n3d" min="0" max="2" step=".5">
		</div>
		<div class="form-check form-check-inline" id="cre">
  			<label class="form-check-label" for="oc7">FE</label>
  			<input class="form-control" type="number" name="oc7"
  			 <?php if ($f['FE']>0){echo 'value="'.$f['FE'].'"';}?>  id="n3d" min="0" max="2" step=".5">
		</div>
	</div>

	<div class="input-group">
  		<span class="input-group-text">TITULACION</span>
  		<select name="titulacion" required>
			<option selected disabled value="">-----</option>
			<option value="---" <?php if($f['titulacion']=="---"){echo 'selected';}?>>---</option>
			<option value="TP" <?php if($f['titulacion']=="TP"){echo 'selected';}?>>TP</option>
			<option value="TPR" <?php if($f['titulacion']=="TPR"){echo 'selected';}?>>TPR</option>
			<option value="O" <?php if($f['titulacion']=="O"){echo 'selected';}?>>O</option>
		</select>
	</div>

	<div class="input-group">
  		<span class="input-group-text">ADEUDA MATERIAS</span>
  		<select name="adeudaMaterias" required>
			<option selected disabled value="">-----</option>
			<option value="si" <?php if($f['adeudaMaterias']=="si"){echo 'selected';}?> >Si</option>
			<option value="no" <?php if($f['adeudaMaterias']=="no"){echo 'selected';}?> >No</option>
		</select>
	</div>
	
	</div>
	
	<table id="sim">

		<tr>
			<td colspan="4" id="in">
				SIMBOLOGIA
			</td>
		</tr>
		<tr>
			<td id="in">
				C
			</td>
			<td>
				CONGRESO
			</td>
			<td id="in">
				CCB
			</td>
			<td>
				CONCURSO DE CIENCIAS BASICAS
			</td>
		</tr>
		<tr>
			<td id="in">
				CIT
			</td>
			<td>
				CONCURSO DE INNOVACION TECNOLOGICA
			</td>
			<td id="in">
				FE
			</td>
			<td>
				FERIA EMPRENDEDORES
			</td>
		</tr>
		<tr>
			<td id="in">
				PDS
			</td>
			<td>
				PROGRAMA DE DESARROLLO SUSTENTABLE
			</td>
			<td id="in">
				TP
			</td>
			<td>
				TITULACION POR PROMEDIO
			</td>
		</tr>
		<tr>
			<td id="in">
				PD
			</td>
			<td>
				PROGRAMA DELFIN
			</td>
			<td id="in">
				TPR
			</td>
			<td>
				TITULACION POR RESIDENCIAS PROFESIONALES
			</td>
		</tr>
		<tr>
			<td id="in">
				AE
			</td>
			<td>
				ACTIVIDADES EXTRAESCOLARES
			</td>
			<td id="in">
				O
			</td>
			<td>
				OTROS
			</td>
		</tr>
	</table>														

	<br>
		<input type="submit" name="accion" value="Enviar" id="aceptar" class="btn btn-success">	
</form>
<br>
</section>
</div>
</center>
</body>
</html>

<?php 
		}  
	}else{
		echo '<script type="text/javascript">  alert("Numero de control no encontrado, parece que no hay registros con ese No. Control, intente registrarse nuevamente"); window.location.href="index.php";</script>';
		}

}else if (empty($_POST['noControl'])) {
	echo '<script type="text/javascript">  alert("no se ha ingresado ningun Numero de control"); window.location.href="index.php";</script>';
	}
?>
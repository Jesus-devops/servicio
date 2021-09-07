  <?php
session_start();
include "../conexion.php";

if (isset($_SESSION['noControl'])&&$_SESSION['noControl']!=0) {

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
<ul class="nav nav" style="margin: 5px; display: block;">
  	<li class="nav-item">
   	 	<a class="btn btn-primary" href="../index.php" >Página principal</a>
		<a class="btn btn-primary" href="MenuM.php" >Menú editar alumno</a>
  	</li>
</ul>	


<section>
<form action="MaltaAlumno2.php" method = "post" enctype="multipart/form-data" id="agrega">
	<?php 
	$re=$mysql->query("select * from beca where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		 $i="";$ni="";
		 $cont=1;
		 while ($f=$re->fetch_array()) {
		 		
				$i=$f['Institucion']; $ni=$f['nombreInstitucion'];
			}
	 ?>
	<br>
		<div id="orden">
<div class="input-group">
	<span class="input-group-text" >becado por</span>
	<select name="institucion">
		<option  value="">----------</option>
		<option value="Gobierno federal" <?php if ($i=="Gobierno federal") {echo 'selected';}?> >Gobierno federal <?php while ($f=$re->fetch_array()) { 	echo $f['nombreInstitucion'];	} ?> </option>
		<option value="Gobierno estatal" <?php if ($i=="Gobierno estatal") {echo 'selected';}?> >Gobierno estatal</option>
		<option value="Esfuerzos de bachillerato" <?php if ($i=="Esfuerzos de bachillerato") {echo 'selected';}?> >Esfuerzos de bachillerato</option>
	</select>
</div>			
<div class="input-group">
  <span class="input-group-text">Nombre de la institucion </span>
  <input type="text" class="form-control" placeholder="Institucion" name="nombreInstitucion" id="estudios" value=<?php echo $ni; ?> >
</div>
<?php 
	$re2=$mysql->query("select * from trabajo where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		$ne="";$h="";
		while ($f=$re2->fetch_array()) { 		
				$ne=$f['nombreEmpresa']; $h=$f['horario'];
			}
	 ?>
<div class="input-group">
  <span class="input-group-text">Nombre de empresa donde trabajas</span>
  <input type="text" class="form-control" placeholder="Empresa" name="nombreEmpresa" id="txtlargo"  value=<?php echo $ne; ?> >
</div>

<div class="input-group">
  <span class="input-group-text">Horario</span>
	<select name="horario">
		<option  value="">-----</option>
		<option value="matutino" <?php if ($h=="matutino") {echo 'selected';}?>>Matutino</option>
		<option value="vespertino" <?php if ($h=="vespertino") {echo 'selected';}?>>Vespertino</option>
		<option value="nocturno" <?php if ($h=="nocturno") {echo 'selected';}?>>Nocturno</option>
	</select>
</div>

<?php 
$re2=$mysql->query("select * from extra where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		while ($f=$re2->fetch_array()) { 		
 ?>

<span class="input-group-text">Donde realizaste tus estudios de:</span>
<div class="input-group" style="display: block;">
	<input type="text" name="primaria" placeholder="Primaria" class="form-control" id="estudios" value=<?php echo $f['primaria']; ?>>
	<input type="text" name="secundaria" placeholder="Secundaria" class="form-control" id="estudios" value="<?php echo $f['secundaria']; ?>">
	<input type="text" name="prepa" placeholder="Preparatoria" class="form-control" id="estudios" value=<?php echo $f['prepa']; ?>>
	<input type="text" name="estudiosSuperiores" placeholder="Estudios Superiores" class="form-control" id="estudios" value=<?php echo $f['estudiosSuperiores']; ?>>
</div>

<div class="input-group">
  <span class="input-group-text">Fecha de nacimiento</span>
  <input type="date" class="form-control"  name="fechaDeNacimiento" id="fecha" value=<?php echo $f['fechaDeNacimiento']; ?>>
</div>

<div class="input-group">
  <span class="input-group-text">Lugar de nacimiento</span>
  <input type="text" class="form-control" placeholder="Lugar de nacimiento"   name="lugarDeNacimiento" id="estudios" value=<?php echo $f['lugarDeNacimiento']; ?>>
</div>
	
<div class="input-group">
  <span class="input-group-text">Peso (kg)</span>
  <input type="number" class="form-control" placeholder="N"="true" name="peso" id="n2d" min="0" value=<?php echo $f['peso']; ?>>
</div><div class="input-group">
  <span class="input-group-text">Estatura (cm)</span>
  <input type="number" class="form-control" name="estatura" placeholder="N" id="n2d" min="0" value=<?php echo $f['estatura']; ?>>
</div>

<div class="input-group">
	<span class="input-group-text" >Estado civil</span>
	<select name="estadoCivil">
		<option  value="">-----</option>
		<option value="soltero" <?php if ($f['estadoCivil']=="soltero") {echo 'selected';}?>>Soltero(a)</option>
		<option value="casado" <?php if ($f['estadoCivil']=="casado") {echo 'selected';}?>>Casado(a)</option>
		<option value="divorciao" <?php if ($f['estadoCivil']=="divorciao") {echo 'selected';}?>>Divorciado(a)</option>
		<option value="viudo" <?php if ($f['estadoCivil']=="viudo") {echo 'selected';}?>>Viudo(a)</option>
		<option value="otro" <?php if ($f['estadoCivil']=="otro") {echo 'selected';}?>>Otro</option>
	</select>
</div><div class="input-group">
  <span class="input-group-text">No. de hijos*</span>
  <input type="number" class="form-control" placeholder="N" name="nHijos" id="n2d" min="0" value=<?php echo $f['nHijos']; ?>>
</div>


<div class="input-group">
  <span class="input-group-text">Domicilio actual</span>
  <input type="text" class="form-control" placeholder="Domicilio actual" ="true" name="domicilioActual" id="estudios" value=<?php echo $f['domicilioActual']; ?>>
</div>

<div class="input-group">
  <span class="input-group-text">Teléfono domicilio</span>
  <input type="number" class="form-control" placeholder="Teléfono" ="true" name="telefono" id="tel" min="0" value=<?php echo $f['telefono']; ?>>
</div>

<div class="input-group">
  <span class="input-group-text">Tipo de vivienda</span>
	<select name="tipoVivienda">
		<option  value="">-----</option>
		<option value="casa" <?php if ($f['tipoVivienda']=="casa") {echo 'selected';}?>>Casa</option>
		<option value="departamento" <?php if ($f['tipoVivienda']=="departamento") {echo 'selected';}?>>Departamento</option>
	</select>
</div>
	
<div class="input-group">
  <span class="input-group-text">La casa o departamento donde vives es</span>
  <select name="viviendaEs">
		<option  value="">-----</option>
		<option value="propia" <?php if ($f['viviendaEs']=="propia") {echo 'selected';}?>>Propia</option>
		<option value="rentada" <?php if ($f['viviendaEs']=="rentada") {echo 'selected';}?>>Rentada</option>
		<option value="prestada" <?php if ($f['viviendaEs']=="prestada") {echo 'selected';}?>>Prestada</option>
		<option value="otros" <?php if ($f['viviendaEs']=="otros") {echo 'selected';}?>>Otros</option>
	</select>
</div>			
			
<div class="input-group">
  <span class="input-group-text">No. de personas con las que vives</span>
  <input type="number" class="form-control" placeholder="N"  name="nPersonas" id="n2d" min="0" value=<?php echo $f['nPersonas']; ?>>
</div>			

<div class="input-group">
  <span class="input-group-text">Parentesco*:</span>
  <input type="text" class="form-control" placeholder="Parentesco"  name="parentesco" id="estudios" value=<?php echo $f['parentesco']; ?>>
</div>	

<div class="input-group">
  <span class="input-group-text">En el transcurso de tus estudios viviras:</span>
  <select name="vivira">
		<option  value="">----------</option>
		<option value="con mi familia" <?php if ($f['vivira']=="con mi familia") {echo 'selected';}?>>Con mi familia</option>
		<option value="con familiares cercanos" <?php if ($f['vivira']=="con familiares cercanos") {echo 'selected';}?>>Con familiares cercanos</option>
		<option value="con otros estudiantes" <?php if ($f['vivira']=="con otros estudiantes") {echo 'selected';}?>>Con otros estudiantes</option>
		<option value="solo" <?php if ($f['vivira']=="solo") {echo 'selected';}?>>Solo</option>
	</select>
</div>		

<div class="input-group">
  <span class="input-group-text" id="ea"> A cuánto ascienden los ingresos mensuales de tu familia $*:</span>
  <input type="number" class="form-control" placeholder="N"   name="ingresoMFamiliar" id="tel" min="0" value=<?php echo $f['ingresoMfamiliar']; ?>>
</div>	

<div class="input-group">
  <span class="input-group-text" id="ea2">En caso de ser económicamente independiente, ¿a cuánto asciende tu ingreso? $*:</span>
  <input type="number" class="form-control" placeholder="N"   name="tuIngreso" id="tel" min="0" value=<?php echo $f['tuIngreso']; ?>>
</div>	

<h4>En caso de accidente avisar a:</h4>
<div class="input-group">
  <span class="input-group-text">Nombre</span>
  <input type="text" class="form-control" placeholder="Nombre completo"   name="avisarNombre" id="correoIn" value=<?php echo $f['avisarNombre']; ?>>
</div>
<div class="input-group">
  <span class="input-group-text">Teléfono</span>
  <input type="number" class="form-control" placeholder="Teléfono"   name="avisarTelefono" id="tel" min="0" value=<?php echo $f['avisarTelefono']; ?>>
</div>

<?php 
}
 ?>
		<br>
	<input type="submit" name="accion" value="Enviar" id="aceptar" class="btn btn-success"><br>
</form>

</section>
</div>
</center>
</body>
<?php 
	
}
 ?>
</html>

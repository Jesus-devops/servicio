<?php
session_start();
	include "../conexion.php";
if (isset($_SESSION['noControl'])&&$_SESSION['noControl']!=0) {

	$re=$mysql->query("select noControl from caracteristicaspersonales where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		$noC=0;	
		while ($f=$re->fetch_array()) { 
		$noC=$f['noControl'];			
	  	} 

		if($_SESSION['noControl']==$noC) {
		echo '<script type="text/javascript"> alert("Ha completado el formulario anterior"); window.location.href="index.php";</script>';
		}
	}else {
		echo '<script type="text/javascript"> alert("se perdio la sesion"); window.location.href="index.php";</script>';
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Estado Psicofisiologico.</title>
	<link rel="shortcut icon" href="../icono.png"/>
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
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>	
<section>


	<form action="altaestadofisiologico.php" method = "post" enctype="multipart/form-data" id="agrega">

        <h2>Estado Psicofisiológico</h2>

			<?php 

			$re=$mysql->query("select * from estadopsicofisiologico where noControl=".$_SESSION['noControl'])or die($mysql-> error);
					//while ($f=$re->fetch_array()) { 
					$f['noControl'];	
			/*if (isset($_SESSION['noControl'])) {
				echo '<input type="hidden" name="noControl" value="'.$_SESSION['noControl'].'" > ';*/
			//}
			?>
	
<br>
<div class="input-group">
	<span class="input-group-text">¿Tiene alguna preinscripción?</span>
	<select name="prescripcionTiene" required value=<?php echo $f['prescripcionTiene'];?>>
		<option selected disabled value="">-----</option>
		<option value="no">No</option>
		<option value="si">Si</option>
	</select>
</div>

<div class="input-group">
	<span class="input-group-text">¿Que preinscripción tiene?</span>
	<input type="text" class="form-control" name="prescripcionCual" id="correoIn" value=<?php echo $f['prescripcionCual'];?>>
</div>

	<h4>¿Qué tan seguidos Sufres de alguno de estos padecimientos?</h4>

<div class="input-group">
	<span class="input-group-text">Pies o Manos hinchados:</span>
	<select name="manosPiesHinchados" required value=<?php echo $f['manosPiesHinchados'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Dolor en el vientre:</span>
	<select name="dolorVientre" required value=<?php echo $f['dolorVientre'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Dolor de cabeza o vomito:</span>
	<select name="dolorCabezaVomito" required value=<?php echo $f['dolorCabezaVomito'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Perdida del Equilibro:</span>
	<select name="perdidaEquilibrio" required value=<?php echo $f['perdidaEquilibrio'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Fatiga o Agotamiento:</span>
	<select name="fatigaAgotamiento" required value=<?php echo $f['fatigaAgotamiento'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Perdida de la Vista u Oído:</span>
	<select name="perdidaVistaOido" required value=<?php echo $f['perdidaVistaOido'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Dificultad para dormir:</span>
	<select name="DificilDormir" required value=<?php echo $f['DificilDormir'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Tienes Pesadillas de terrores nocturnos:</span>
	<select name="pesadillasTerrorNocturnoA" required value=<?php echo $f['pesadillasTerrorNocturnoA'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Incontinencia (orina, heces):</span>
	<select name="incontinencia" required value=<?php echo $f['incontinencia'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Tartamudeo a explicarse:</span>
	<select name="tartamudeo" required value=<?php echo $f['tartamudeo'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">Miedos intensos ante cosas:</span>
	<select name="miedoIntensoA" required value=<?php echo $f['miedoIntensoA'];?>>
		<option value="nunca">Nunca</option>
		<option value="antes">Antes</option>
		<option value="aveces">A veces</option>
		<option value="frecuente">Frecuente</option>
		<option value="mucho">Mucho</option>
	</select>
</div>
<div class="input-group">
	<span class="input-group-text">¿Observaciones de higiene?</span>
	<input type="text" class="form-control" name="observacionesHigiene" id="correoIn" value=<?php echo $f['observacionesHigiene'];?>>
</div>
<br>

        <h2>Características Personales (Madurez y Equilibrio)</h2>

<br>
		<h4>AUTOPERCEPCION</h4>
<br>
<table id="cara">

	<tr>
		<td class="tdtab2">
			<div class="input-group">
				<span class="input-group-text">Puntual: </span>
			<select name="puntual" required value=<?php echo $f['puntual'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select>
			</div>
		</td>
		<td>
			<input type="text" name="puntualO" placeholder="Observaciones" class="form-control" value=<?php echo $f['puntualO'];?>>
		</td>
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Tímido: </span>
			<select name="timido" required value=<?php echo $f['timido'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="timidoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['timidoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Alegre:</span>
			<select name="alegre" required value=<?php echo $f['alegre'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="alegreO" placeholder="Observaciones" class="form-control" value=<?php echo $f['alegreO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Agresivo:</span>
			<select name="agresivo" required value=<?php echo $f['agresivo'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="agresivoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['agresivoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Abierto a Ideas: </span>
			<select name="abiertoIdeas" required value=<?php echo $f['abiertoIdeas'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="abiertoIdeasO" placeholder="Observaciones" class="form-control" value=<?php echo $f['abiertoIdeasO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Reflexivo:</span>
			<select name="reflexivo" required value=<?php echo $f['reflexivo'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="reflexivoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['reflexivoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Constante:</span>
			<select name="constante" required value=<?php echo $f['constante'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="constanteO" placeholder="Observaciones" class="form-control" value=<?php echo $f['constanteO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Optimista</span>
			<select name="optimista" required value=<?php echo $f['optimista'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="optimistaO" placeholder="Observaciones" class="form-control" value=<?php echo $f['optimistaO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Impulsivo:</span>
			<select name="impulsivo" required value=<?php echo $f['impulsivo'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="impulsivoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['impulsivoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Silencioso: </span>
			<select name="silencioso" required value=<?php echo $f['silencioso'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="silenciosoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['silenciosoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Generoso:</span>
			<select name="generoso" required value=<?php echo $f['generoso'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>			
			<input type="text" name="generosoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['generosoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Inquieto:</span>
			<select name="inquieto" required value=<?php echo $f['inquieto'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="inquietoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['inquietoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Cambios de humor:</span>
			<select name="humor" required value=<?php echo $f['humor'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="humorO" placeholder="Observaciones" class="form-control" value=<?php echo $f['humorO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Dominante:</span>
			<select name="dominante" required value=<?php echo $f['dominante'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="dominanteO" placeholder="Observaciones" class="form-control" value=<?php echo $f['dominanteO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Egoísta:</span>
			<select name="egoista" required value=<?php echo $f['egoista'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="egoistaO" placeholder="Observaciones" class="form-control" value=<?php echo $f['egoistaO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Sumiso:</span>
			<select name="sumiso" required value=<?php echo $f['sumiso'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="sumisoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['sumisoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Confiado en si mismo:</span>
			<select name="confiado" required value=<?php echo $f['confiado'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="confiadoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['confiadoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Imaginativo:</span>
			<select name="imaginativo" required value=<?php echo $f['imaginativo'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="imaginativoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['imaginativoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Con Iniciativa propia:</span>
			<select name="iniciativa" required value=<?php echo $f['iniciativa'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="iniciativaO" placeholder="Observaciones" class="form-control" value=<?php echo $f['iniciativaO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Sociable:</span>
			<select name="sociable" required value=<?php echo $f['sociable'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="sociableO" placeholder="Observaciones" class="form-control" value=<?php echo $f['sociableO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Responsable:</span>
			<select name="responsable" required value=<?php echo $f['responsable'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="responsableO" placeholder="Observaciones" class="form-control" value=<?php echo $f['responsableO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Perseverante:</span>
			<select name="perseverante" required value=<?php echo $f['perseverante'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="perseveranteO" placeholder="Observaciones" class="form-control" value=<?php echo $f['perseveranteO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Motivado:</span>
			<select name="motivado" required value=<?php echo $f['motivado'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="motivadoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['motivadoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Activo:</span>
			<select name="activo" required value=<?php echo $f['activo'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="activoO" placeholder="Observaciones" class="form-control" value=<?php echo $f['activoO'];?>>
		</td>	
	</tr>
	<tr>
		<td class="tdtab2">
			<div class="input-group"><span class="input-group-text">Independiente:</span>
			<select name="independiente" required value=<?php echo $f['independiente'];?>>
		<option selected disabled value="">-----</option>
				<option value="mucho">Mucho</option>
				<option value="frecuente">Frecuente</option>
				<option value="poco">Poco</option>
				<option value="no">No</option>
			</select></div>
		</td>
		<td>
			<input type="text" name="independienteO" placeholder="Observaciones" class="form-control" value=<?php echo $f['independienteO'];?>>
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
<?php 
session_start();
	include "../conexion.php";
if (isset($_SESSION['id'])) {

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Consulta</title>
	<link rel="shortcut icon" href="../icono.png" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" >
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >

</head>
<body id="consultas" >
	<center>
		<img src="../logo.png" id="logo">
	<?php
	  if (isset($_SESSION['id'])) { ?>
	<header>
<ul class="nav nav-pills" style="margin: 5px">

		<li class="nav-item"><a class="nav-link" href="../login/cerrar.php">Cerrar sesion</a>
		</li>

</ul>
	</header>
	<?php } ?>

<section class="principal">
<?php
	  if (isset($_SESSION['id'])) { ?>	
	<div id="datos" class="gen"></div>
<?php } ?>


	<br>

		<table id="sim">
		<tr>
			<td colspan="4" id="titulo">
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

		<tr>
			<td id="in">0</td>
			<td>NO</td>
		
			<td id="in">1</td>
			<td>SI</td>
		</tr>

	</table>
	<br><br><br><br>
</section>

</center>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/mainConsultas.js"></script>
</body>

</html>

<?php 

	}else {
		echo '<script type="text/javascript"> alert("se perdio la sesion"); window.location.href="../login/";</script>';
	}

 ?>
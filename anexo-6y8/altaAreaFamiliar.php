<?php
	session_start();
	include ("../conexion.php");

	$rp='';
	if ($_POST['tienePareja']=='no') {
		$rp='';
	}else{
		$rp=$_POST['parejaR'];
	}

$rm='';
$am='';
$rp='';
$ap='';

	if (empty($_POST['relacionM'])||empty($_POST['actitudM'])) {
		$rm=''; $am='';
	}else{
		$rm=$_POST['relacionM']; $am=$_POST['actitudM'];
	}

	if (empty($_POST['relacionP'])||empty($_POST['actitudP'])) {
		$rp=''; $ap='';
	}else{
		$rp=$_POST['relacionP']; $ap=$_POST['actitudP'];
	}

		 
	$Sql="insert into areafamiliarysocial (noControl,relacionFamilia,dificultades,tipoDificultad,actitudFamilia,relacionP,actitudP,relacionM,actitudM,ligadoAfectivamente,ligadoPorque,tuEducacion,decision,otroDato,companerosR,companerosPorque,amigosR,tienePareja,parejaR,profesoresR,autoridadesR,tiempoLibre,actividades) values(
				".$_SESSION['noControl'].",
				'".$_POST['relacionFamilia']."',
				'".$_POST['dificultades']."',
				'".$_POST['tipoDificultad']."',
				'".$_POST['actitudFamilia']."',
				'".$_POST['relacionP']."',
				'".$_POST['actitudP']."',
				'".$rm."',
				'".$am."',
				'".$_POST['ligadoAfectivamente']."',
				'".$_POST['ligadoPorque']."',
				'".$_POST['tuEducacion']."',
				'".$_POST['decision']."',
				'".$_POST['otroDato']."',
				'".$_POST['companerosR']."',
				'".$_POST['companerosPorque']."',
				'".$_POST['amigosR']."',
				'".$_POST['tienePareja']."',
				'".$rp."',
				'".$_POST['profesoresR']."',
				'".$_POST['autoridadesR']."',
				'".$_POST['tiempoLibre']."',
				'".$_POST['actividades']."')";

		if ($mysql->query($Sql)or die($mysql-> error)) {
				echo '<script type="text/javascript">  window.location.href="psicopedagogica.php";</script>';
		}else{
				echo '<script type="text/javascript"> alert("No agrego")'; 
			}
	
?>
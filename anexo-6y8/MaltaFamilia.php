<?php
	session_start();
	include ("../conexion.php");

if ($_SESSION['padre']=='vive'||$_SESSION['madre']=='vive') {
	
if ($_SESSION['padre']=='vive') {
	
	$nombreP=""; $edadP=""; $maxEscolaridadP=""; $trabajaP=""; $profesionP=""; $lugarDeTrabajoP=""; $tipoTrabajoP=""; $domicilioP=""; $telefonoP=0; 
	if (empty($_POST['nombreP'])) {			$nombreP="";}else{ 		$nombreP=$_POST['nombreP'];}
	if (empty($_POST['edadP'])) {			$edadP="";}else{ 		$edadP=$_POST['edadP'];}
	if (empty($_POST['maxEscolaridadP'])) {	$maxEscolaridadP="";}else{$maxEscolaridadP=$_POST['maxEscolaridadP'];}
	if (empty($_POST['trabajaP'])) {		$trabajaP="";}else{ 	$trabajaP=$_POST['trabajaP'];     
			if ($trabajaP=='si') {
					if (empty($_POST['profesionP'])) {		$profesionP="";}else{ 	$profesionP=$_POST['profesionP'];}
					if (empty($_POST['lugarDeTrabajoP'])){	$lugarDeTrabajoP="";}else{$lugarDeTrabajoP=$_POST['lugarDeTrabajoP'];}
					if (empty($_POST['tipoTrabajoP'])) {	$tipoTrabajoP="";}else{ 	$tipoTrabajoP=$_POST['tipoTrabajoP'];}
			}else{ $profesionP="";
				$lugarDeTrabajoP="";
				$tipoTrabajoP="";}
				}

	if (empty($_POST['domicilioP'])) {		$domicilioP="";}else{ 	$domicilioP=$_POST['domicilioP'];}
	if (empty($_POST['telefonoP'])) {		$telefonoP=0;}else{ 	$telefonoP=$_POST['telefonoP'];}


		$Sql='update padre set nombreP="'.$nombreP.'",edadP='.$edadP.',maxEscolaridadP="'.$maxEscolaridadP.'",trabajaP="'.$trabajaP.'",profesionP="'.$profesionP.'",lugarDeTrabajoP="'.$lugarDeTrabajoP.'",tipoTrabajoP="'.$tipoTrabajoP.'",domicilioP="'.$domicilioP.'",telefonoP='.$telefonoP.' where noControl='.$_SESSION['noControl'];




		$mysql->query($Sql)or die($mysql-> error);
			
}  

if ($_SESSION['madre']=='vive') {
	
	$nombreM=""; $edadM=""; $maxEscolaridadM=""; $trabajaM=""; $profesionM=""; $lugarDeTrabajoM=""; $tipoTrabajoM=""; $domicilioM=""; $telefonoM=""; 

	if (empty($_POST['nombreM'])) {			$nombreM="";}else{ 		$nombreM=$_POST['nombreM'];}
	if (empty($_POST['edadM'])) {			$edadM="";}else{ 		$edadM=$_POST['edadM'];}
	if (empty($_POST['maxEscolaridadM'])) {	$maxEscolaridadM="";}else{$maxEscolaridadM=$_POST['maxEscolaridadM'];}
	if (empty($_POST['trabajaM'])) {		$trabajaM="";}else{ 	$trabajaM=$_POST['trabajaM'];     
			if ($trabajaM=='si') {
					if (empty($_POST['profesionM'])) {		$profesionM="";}else{ 	$profesionM=$_POST['profesionM'];}
					if (empty($_POST['lugarDeTrabajoM'])){	$lugarDeTrabajoM="";}else{$lugarDeTrabajoM=$_POST['lugarDeTrabajoM'];}
					if (empty($_POST['tipoTrabajoM'])) {	$tipoTrabajoM="";}else{ 	$tipoTrabajoM=$_POST['tipoTrabajoM'];}
			}else{ $profesionM="";
				$lugarDeTrabajoM="";
				$tipoTrabajoM="";}
				}

	if (empty($_POST['domicilioM'])) {		$domicilioM="";}else{ 	$domicilioM=$_POST['domicilioM'];}
	if (empty($_POST['telefonoM'])) {		$telefonoM=0;}else{ 	$telefonoM=$_POST['telefonoM'];}

	$Sql2='update madre set nombreM="'.$nombreM.'",edadM='.$edadM.',maxEscolaridadM="'.$maxEscolaridadM.'",trabajaM="'.$trabajaM.'",profesionM="'.$profesionM.'",lugarDeTrabajoM="'.$lugarDeTrabajoM.'",tipoTrabajoM="'.$tipoTrabajoM.'",domicilioM="'.$domicilioM.'",telefonoM='.$telefonoM.' where noControl='.$_SESSION['noControl'];

		$mysql->query($Sql2)or die($mysql-> error);
					echo '<script type="text/javascript">  alert("Se modifico correctamente"); window.location.href="Mfamilia.php";</script>';
}
}else{
	echo '<script type="text/javascript"> alert("modifique el estado de padre y madre en el primer formulario ");</script>';
}
?>

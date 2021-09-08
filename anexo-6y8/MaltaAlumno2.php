<?php
	session_start();
	include ("../conexion.php");

if (empty($_POST['primaria'])) {		$primaria="";}else{ 	$primaria=$_POST['primaria'];}
if (empty($_POST['secundaria'])) {		$secundaria="";}else{ 	$secundaria=$_POST['secundaria'];}
if (empty($_POST['prepa'])) {			$prepa="";}else{ 		$prepa=$_POST['prepa'];}
if (empty($_POST['estudiosSuperiores'])) {	$estudiosSuperiores="";}else{ 	$estudiosSuperiores=$_POST['estudiosSuperiores'];}
if (empty($_POST['fechaDeNacimiento'])) {	$fechaDeNacimiento="";}else{ 	$fechaDeNacimiento=$_POST['fechaDeNacimiento'];}
if (empty($_POST['lugarDeNacimiento'])) {	$lugarDeNacimiento="";}else{ 	$lugarDeNacimiento=$_POST['lugarDeNacimiento'];}
if (empty($_POST['peso'])) {			$peso=0;}else{ 			$peso=$_POST['peso'];}
if (empty($_POST['estatura'])) {		$estatura=0;}else{ 		$estatura=$_POST['estatura'];}
if (empty($_POST['estadoCivil'])) {		$estadoCivil="";}else{ 	$estadoCivil=$_POST['estadoCivil'];}
if (empty($_POST['nHijos'])) {			$nHijos=0;}else{ 		$nHijos=$_POST['nHijos'];}
if (empty($_POST['domicilioActual'])) {	$domicilioActual="";}else{ 	$domicilioActual=$_POST['domicilioActual'];}
if (empty($_POST['telefono'])) {		$telefono=0;}else{ 		$telefono=$_POST['telefono'];}
if (empty($_POST['tipoVivienda'])) {	$tipoVivienda="";}else{ $tipoVivienda=$_POST['tipoVivienda'];}
if (empty($_POST['viviendaEs'])) {		$viviendaEs="";}else{ 	$viviendaEs=$_POST['viviendaEs'];}
if (empty($_POST['nPersonas'])) {		$nPersonas=0;}else{ 	$nPersonas=$_POST['nPersonas'];}
if (empty($_POST['parentesco'])) {		$parentesco="";}else{ 	$parentesco=$_POST['parentesco'];}
if (empty($_POST['vivira'])) {			$vivira="";}else{ 		$vivira=$_POST['vivira'];}
if (empty($_POST['ingresoMFamiliar'])) {$ingresoMFamiliar=0;}else{ 	$ingresoMFamiliar=$_POST['ingresoMFamiliar'];}
if (empty($_POST['tuIngreso'])) {		$tuIngreso=0;}else{ 	$tuIngreso=$_POST['tuIngreso'];}
if (empty($_POST['avisarNombre'])) {	$avisarNombre="";}else{ $avisarNombre=$_POST['avisarNombre'];}
if (empty($_POST['avisarTelefono'])) {	$avisarTelefono=0;}else{$avisarTelefono=$_POST['avisarTelefono'];}


	$Sql='update extra set 
	primaria="'.$primaria.'",
	secundaria="'.$secundaria.'",
	prepa="'.$prepa.'",
	estudiosSuperiores="'.$estudiosSuperiores.'",
	fechaDeNacimiento="'.$fechaDeNacimiento.'",
	lugarDeNacimiento="'.$lugarDeNacimiento.'",
	peso='.$peso.',
	estatura='.$estatura.',
	estadoCivil="'.$estadoCivil.'",
	nHijos='.$nHijos.',
	domicilioActual="'.$domicilioActual.'",
	telefono='.$telefono.',
	tipoVivienda="'.$tipoVivienda.'",
	viviendaEs="'.$viviendaEs.'",
	nPersonas='.$nPersonas.',
	parentesco="'.$parentesco.'",
	vivira="'.$vivira.'",
	ingresoMFamiliar='.$ingresoMFamiliar.',
	tuIngreso='.$tuIngreso.',
	avisarNombre="'.$avisarNombre.'",
	avisarTelefono='.$avisarTelefono.' where noControl='.$_SESSION['noControl'];

if (empty($_POST['institucion'])) {		$institucion="";}else{ 		$institucion=$_POST['institucion'];}
if (empty($_POST['nombreInstitucion'])) {$nombreInstitucion="";}else{$nombreInstitucion=$_POST['nombreInstitucion'];}
if (empty($_POST['nombreEmpresa'])) {	$nombreEmpresa="";}else{	$nombreEmpresa=$_POST['nombreEmpresa'];}
if (empty($_POST['horario'])) {			$horario="";}else{			$horario=$_POST['horario'];}

	if ($mysql->query($Sql)or die($mysql-> error)) {

		$Sql5="select noControl from beca where noControl=".$_SESSION['noControl'];
		$Sql6="select noControl from trabajo where noControl=".$_SESSION['noControl'];
		
			$re=$mysql->query($Sql5)or die($mysql-> error);
			$re2=$mysql->query($Sql6)or die($mysql-> error);
$beca=0;$trabajo=0;
$Sql2="";
$Sql3="";		
		while ($f=$re->fetch_array()) { 		
				$beca=$f['noControl'];
			}
		while ($f=$re2->fetch_array()) { 		
				$trabajo=$f['noControl'];
			}

		if ($_SESSION['noControl']==$beca) {
			$Sql2='update beca set 
			institucion="'.$institucion.'",
			nombreInstitucion="'.$nombreInstitucion.'" where noControl='.$_SESSION['noControl'];
		}else{
				$Sql2='insert into beca (institucion,nombreInstitucion,noControl) values(
					"'.$institucion.'",
					"'.$nombreInstitucion.'",
					'.$_SESSION['noControl'].')';

		}
		if ($_SESSION["noControl"]==$trabajo) {
			$Sql3='update trabajo set 
			nombreEmpresa="'.$nombreEmpresa.'",
			horario="'.$horario.'" where noControl='.$_SESSION['noControl'];
		}else{
				$Sql3='insert into trabajo (nombreEmpresa,horario,noControl) values(
					"'.$nombreEmpresa.'",
					"'.$horario.'",
					'.$_SESSION['noControl'].')';
		}

			$mysql->query($Sql2)or die($mysql-> error);
			$mysql->query($Sql3)or die($mysql-> error);

			echo '<script type="text/javascript">  alert("Se modifico correctamente"); window.location.href="Malumno2.php";</script>';
			
		}else{
			echo '<script type="text/javascript"> alert("No agrego")</script>'; 
		}
	
?>

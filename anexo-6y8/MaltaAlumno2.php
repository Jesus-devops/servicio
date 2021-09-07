<?php
	session_start();
	include ("../conexion.php");

if (empty($_POST['primaria'])) {	$primaria="";}else{ $primaria=$_POST['primaria'];}
if (empty($_POST['secundaria'])) {	$secundaria="";}else{ 	$secundaria=$_POST['secundaria'];}
if (empty($_POST['prepa'])) {	$prepa="";}else{ 	$prepa=$_POST['prepa'];}
if (empty($_POST['estudiosSuperiores'])) {	$estudiosSuperiores="";}else{ 	$estudiosSuperiores=$_POST['estudiosSuperiores'];}
if (empty($_POST['fechaDeNacimiento'])) {	$fechaDeNacimiento="";}else{ 	$fechaDeNacimiento=$_POST['fechaDeNacimiento'];}
if (empty($_POST['lugarDeNacimiento'])) {	$lugarDeNacimiento="";}else{ 	$lugarDeNacimiento=$_POST['lugarDeNacimiento'];}
if (empty($_POST['peso'])) {	$peso=0;}else{ 	$peso=$_POST['peso'];}
if (empty($_POST['estatura'])) {	$estatura=0;}else{ 	$estatura=$_POST['estatura'];}
if (empty($_POST['estadoCivil'])) {	$estadoCivil="";}else{ }	$estadoCivil=$_POST['estadoCivil'];}
if (empty($_POST['nHijos'])) {		$nHijos=0;}else{ 	$nHijos=$_POST['nHijos'];}
if (empty($_POST['domicilioActual'])) {	$domicilioActual="";}else{ 	$domicilioActual=$_POST['domicilioActual'];}
if (empty($_POST['telefono'])) {	$telefono=0;}else{ 	$telefono=$_POST['telefono'];}
if (empty($_POST['tipoVivienda'])) {	$tipoVivienda="";}else{ 	$tipoVivienda=$_POST['tipoVivienda'];}
if (empty($_POST['viviendaEs'])) {	$viviendaEs="";}else{ 	$viviendaEs=$_POST['viviendaEs'];}
if (empty($_POST['nPersonas'])) {	$nPersonas=0;}else{ 	$nPersonas=$_POST['nPersonas'];}
if (empty($_POST['parentesco'])) {		$parentesco="";}else{ 	$parentesco=$_POST['parentesco'];}
if (empty($_POST['vivira'])) {	$vivira="";}else{ 	$vivira=$_POST['vivira'];}
if (empty($_POST['ingresoMFamiliar'])) {	$ingresoMFamiliar=0;}else{ 	$ingresoMFamiliar=$_POST['ingresoMFamiliar'];}
if (empty($_POST['tuIngreso'])) {	$tuIngreso=0;}else{ 	$tuIngreso=$_POST['tuIngreso'];}
if (empty($_POST['avisarNombre'])) {	$avisarNombre="";}else{ $avisarNombre=$_POST['avisarNombre'];}
if (empty($_POST['avisarTelefono'])) {	$avisarTelefono=0;}else{ $avisarTelefono=$_POST['avisarTelefono'];}
	

	
	


	$Sql="update extra set 
	primaria='".$primaria."',
	secundaria='".$secundaria."',
	prepa='".$prepa."',
	estudiosSuperiores='".$estudiosSuperiores."',
	fechaDeNacimiento='".$fechaDeNacimiento."',
	lugarDeNacimiento='".$lugarDeNacimiento."',
	peso=".$peso.",
	estatura=".$estatura.",
	estadoCivil='".$estadoCivil."',
	nHijos=".$nHijos.",
	domicilioActual='".$domicilioActual."',
	telefono=".$telefono.",
	tipoVivienda='".$tipoVivienda."',
	viviendaEs='".$viviendaEs."',
	nPersonas=".$nPersonas.",
	parentesco='".$parentesco."',
	vivira='".$vivira."',
	ingresoMFamiliar=".$ingresoMFamiliar.",
	tuIngreso=".$tuIngreso.",
	avisarNombre='".$avisarNombre."',
	avisarTelefono=".$avisarTelefono." where noControl=".$_SESSION['noControl'];



		$institucion="";
		$nombreInstitucion="";
			
		$nombreEmpresa="";
		$horario="";


		$institucion=$_POST['institucion'];
		$nombreInstitucion=$_POST['nombreInstitucion'];
		
		$nombreEmpresa=$_POST['nombreEmpresa'];
		$horario=$_POST['horario'];





	if ($mysql->query($Sql)or die($mysql-> error)) {
		
			echo '<script type="text/javascript">  alert("Se modifico correctamente"); window.location.href="Malumno2.php";</script>';
			
		}else{
			echo '<script type="text/javascript"> alert("No agrego")</script>'; 
		}
	
?>

<?php
	session_start();
	include ("../conexion.php");

if (empty($_POST['primaria'])) {	$primaria="";

if (empty($_POST['secundaria'])) {	$secundaria="";
	
if (empty($_POST['prepa'])) {	$prepa="";
	
if (empty($_POST['estudiosSuperiores'])) {	$estudiosSuperiores="";
	
if (empty($_POST['fechaDeNacimiento'])) {	$fechaDeNacimiento="";
	
if (empty($_POST['lugarDeNacimiento'])) {	$lugarDeNacimiento="";
	
if (empty($_POST['peso'])) {	$peso=0;
	
if (empty($_POST['estatura'])) {	$estatura=0;
	
if (empty($_POST['estadoCivil'])) {	$estadoCivil="";
	
if (empty($_POST['nHijos'])) {		$nHijos=0;

if (empty($_POST['domicilioActual'])) {	$domicilioActual="";
	
if (empty($_POST['telefono'])) {	$telefono=0;
	
if (empty($_POST['tipoVivienda'])) {	$tipoVivienda="";
	
if (empty($_POST['viviendaEs'])) {	$viviendaEs="";
	
if (empty($_POST['nPersonas'])) {	$nPersonas=0;
	
if (empty($_POST['parentesco'])) {		$parentesco="";

if (empty($_POST['vivira'])) {	$vivira="";
	
if (empty($_POST['ingresoMFamiliar'])) {	$ingresoMFamiliar=0;
	
if (empty($_POST['tuIngreso'])) {	$tuIngreso=0;
	
if (empty($_POST['avisarNombre'])) {	$avisarNombre="";
	
if (empty($_POST['avisarTelefono'])) {	$avisarTelefono=0;
	

	$secundaria=$_POST['secundaria'];
	$prepa=$_POST['prepa'];
	$estudiosSuperiores=$_POST['estudiosSuperiores'];
	$fechaDeNacimiento=$_POST['fechaDeNacimiento'];
	$lugarDeNacimiento=$_POST['lugarDeNacimiento'];
	$peso=$_POST['peso'];
	$estatura=$_POST['estatura'];
	$estadoCivil=$_POST['estadoCivil'];
	$nHijos=$_POST['nHijos'];
	$domicilioActual=$_POST['domicilioActual'];
	$telefono=$_POST['telefono'];
	$tipoVivienda=$_POST['tipoVivienda'];
	$viviendaEs=$_POST['viviendaEs'];
	$nPersonas=$_POST['nPersonas'];
	$parentesco=$_POST['parentesco'];
	$vivira=$_POST['vivira'];
	$ingresoMFamiliar=$_POST['ingresoMFamiliar'];
	$tuIngreso=$_POST['tuIngreso'];
	$avisarNombre=$_POST['avisarNombre'];
	$avisarTelefono=$_POST['avisarTelefono'];


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

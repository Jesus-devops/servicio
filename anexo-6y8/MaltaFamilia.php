<?php
	session_start();

	include ("../conexion.php");
	
$p=0;
$m=0;
$h=0;


if ($_SESSION['padre']=='vive'||$_SESSION['madre']=='vive') {
	

if ($_SESSION['padre']=='vive') {

$proP='';$luP='';$tiP='';
	
if ($_POST['trabajaP']='no') {
	$proP='';$luP='';$tiP='';	
}else{
	$proP=$_POST['profesionP'];
	$luP=$_POST['lugarDeTrabajoP'];
	$tiP=$_POST['tipoTrabajoP'];
}

$Sql2="insert into padre (nombreP,edadP,maxEscolaridadP,trabajaP,profesionP,lugarDeTrabajoP,tipoTrabajoP,domicilioP,telefonoP,noControl) values(
				'".$_POST['nombreP']."',
				'".$_POST['edadP']."',
				'".$_POST['gradoP']."',
				'".$_POST['trabajaP']."',
				'".$proP."',
				'".$luP."',
				'".$tiP."',
				'".$_POST['domicilioP']."',
				'".$_POST['telefonoP']."',
				'".$_SESSION['noControl']."')";

	if ($mysql->query($Sql2)or die($mysql-> error)) {
			$p=1;
		}	
}  

if ($_SESSION['madre']=='vive') {

$proM='';$luM='';$tiM='';

if ($_POST['trabajaM']='no') {
	$proM='';$luM='';$tiM='';	
}else{
$proM=$_POST['profesionM'];
$luM=$_POST['lugarDeTrabajoM'];
$tiM=$_POST['tipoTrabajoM'];
}

	$Sql="insert into madre (nombreM,edadM,maxEscolaridadM,trabajaM,profesionM,lugarDeTrabajoM,tipoTrabajoM,domicilioM,telefonoM,noControl) values(
				'".$_POST['nombreM']."',
				'".$_POST['edadM']."',
				'".$_POST['gradoM']."',
				'".$_POST['trabajaM']."',
				'".$proM."',
				'".$luM."',
				'".$tiM."',
				'".$_POST['domicilioM']."',
				'".$_POST['telefonoM']."',
				'".$_SESSION['noControl']."')";

		if ($mysql->query($Sql)or die($mysql-> error)) {
			$m=1;
		}
}
}


if ($_SESSION['nHermanos']>0) {
for ($i=1; $i <=$_SESSION['nHermanos']  ; $i++) {

$nombre=$_POST['nombre'.$i];
$fechaNacimiento=$_POST['fechaNacimiento'.$i];
$sexo=$_POST['sexo'.$i];
$estudios=$_POST['estudios'.$i];
$comoRelacion=$_POST['comoRelacion'.$i];
$actitudCon=$_POST['actitudCon'.$i];

		$Sql3="insert into hermanos(nombre,fechaNacimiento,sexo,estudios,comoRelacion,actitudCon,noControl) values(
			'".$nombre."',
			'".$fechaNacimiento."',
			'".$sexo."',
			'".$estudios."',
			'".$comoRelacion."',
			'".$actitudCon."',
			'".$_SESSION['noControl']."')";

		if ($mysql->query($Sql3)or die($mysql-> error)) {
					
			$h=1;

		}	

 } 	
}

if ($p=1||$m=1||$h=1) {
	echo '<script type="text/javascript"> window.location.href="areaFamiliar.php";</script>';
}else{
	echo '<script type="text/javascript"> alert("No agrego")'; 
	}
?>

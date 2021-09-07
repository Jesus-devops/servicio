<?php
	session_start();
	include ("../conexion.php");


	$primaria="";
	$secundaria="";
	$prepa="";
	$estudiosSuperiores="";
	$fechaDeNacimiento="";
	$lugarDeNacimiento="";
	$peso="";
	$estatura="";
	$estadoCivil="";
	$nHijos="";
	$domicilioActual="";
	$telefono="";
	$tipoVivienda="";
	$viviendaEs="";
	$nPersonas="";
	$parentesco="";
	$vivira="";
	$ingresoMFamiliar="";
	$tuIngreso="";
	$avisarNombre="";
	$avisarTelefono="";




	$primaria=$_POST['primaria'];
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
	primaria='".$_POST['primaria']."',
	secundaria='".$_POST['secundaria']."',
	prepa='".$_POST['prepa']."',
	estudiosSuperiores='".$_POST['estudiosSuperiores']."',
	fechaDeNacimiento='".$_POST['fechaDeNacimiento']."',
	lugarDeNacimiento='".$_POST['lugarDeNacimiento']."',
	peso=".$_POST['peso'].",
	estatura=".$_POST['estatura'].",
	estadoCivil='".$_POST['estadoCivil']."',
	nHijos=".$_POST['nHijos'].",
	domicilioActual='".$_POST['domicilioActual']."',
	telefono=".$_POST['telefono'].",
	tipoVivienda='".$_POST['tipoVivienda']."',
	viviendaEs='".$_POST['viviendaEs']."',
	nPersonas=".$_POST['nPersonas'].",
	parentesco='".$_POST['parentesco']."',
	vivira='".$_POST['vivira']."',
	ingresoMFamiliar=".$_POST['ingresoMFamiliar'].",
	tuIngreso=".$_POST['tuIngreso'].",
	avisarNombre='".$_POST['avisarNombre']."',
	avisarTelefono=".$_POST['avisarTelefono']." where noControl='".$_SESSION['noControl'];
	
echo $Sql;
	if ($mysql->query($Sql)or die($mysql-> error)) {
			
			$Sql2="update beca set 
			institucion='".$_POST['institucion']."',
			nombreInstitucion='".$_POST['nombreInstitucion']."' where noControl=".$_SESSION['noControl'];

			$mysql->query($Sql2)or die($mysql-> error);	
		
			
			$Sql3="insert trabajo set 
			nombreEmpresa='".$_POST['nombreEmpresa']."',
			horario='".$_POST['horario']."' where noControl=".$_SESSION['noControl'];

			$mysql->query($Sql3)or die($mysql-> error);		

			echo '<script type="text/javascript">  window.location.href="Mfamilia.php";</script>';
			
			
		}else{
			echo '<script type="text/javascript"> alert("No agrego")</script>'; 
		}
	
?>

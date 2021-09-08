<?php
	session_start();
	include ("../conexion.php");
$re=$mysql->query("select noControl from extra where noControl=".$_SESSION['noControl'])or die($mysql-> error);
	$noC=0;		
		while ($f=$re->fetch_array()) { 
		$noC=$f['noControl'];			
	  	} 
		if($_SESSION['noControl']==$noC) {
		//echo '<script type="text/javascript"> alert("ya existe este numero de control"); window.location.href="familia.php";</script>';
				//$_SESSION['noControl']=$_POST['noControl'];

		}else{

	$Sql2="update beca set 
	institucion=".$_POST['institucion'].",
	nombreInstitucion=".$_POST['nombreInstitucion']."		
	where noControl=".$_POST['noControl']; 
	//$mysql->query($Sql2)or die($mysql-> error);	
	/*$Sql2="update celular set 
	celular1=".$_POST['celular1'].", 
	celular2=".$_POST['celular2']." 
	where noControl=".$_POST['noControl'];*/

	$Sql3="update trabajo set 
	nombreEmpresa='".$_POST['nombreEmpresa']."',
	horario='".$_POST['horario']."',		
	where noControl=".$_POST['noControl']; 	
	$mysql->query($Sql3)or die($mysql-> error);	

	

	$Sql="update extra set 
	primaria='".$_POST['primaria']."',
	secundaria='".$_POST['secundaria']."',
	prepa='".$_POST['prepa']."' 
	estudiosSuperiores='".$_POST['estudiosSuperiores']."' 
	fechaDeNacimiento='".$_POST['fechaDeNacimiento']."',
	lugarDeNacimiento='".$_POST['lugarDeNacimiento']."',
	peso='".$_POST['peso']."' 
	estatura='".$_POST['estatura']."' 
	estadoCivil='".$_POST['estadoCivil']."',
	nHijos='".$_POST['nHijos']."',
	domicilioActual='".$_POST['domicilioActual']."' 
	telefono='".$_POST['telefono']."' 
	tipoVivienda='".$_POST['tipoVivienda']."',
	viviendaEs='".$_POST['viviendaEs']."',
	nPersonas='".$_POST['nPersonas']."' 
	parentesco='".$_POST['parentesco']."' 
	vivira='".$_POST['vivira']."' 
	ingresoMFamiliar='".$_POST['ingresoMFamiliar']."',
	tuIngreso='".$_POST['tuIngreso']."',
	avisarNombre='".$_POST['avisarNombre']."' 
	avisarTelefono='".$_POST['avisarTelefono']."' 
	where noControl=".$_POST['noControl']; 
	$mysql->query($Sql)or die($mysql-> error);

		

	if ($mysql->query($Sql2)or die($mysql-> error) and $mysql->query($Sql3)or die($mysql-> error)
													and $mysql->query($Sql)or die($mysql-> error)) {
		echo '<script type="text/javascript">  alert("Se modifico correctamente"); window.location.href="Mindex.php";</script>';
		}else{
			echo '<script type="text/javascript"> alert("No modifico")';
			}
	/*if ($mysql->query($Sql)or die($mysql-> error)) {
			
		if ($_SESSION['becado']=='si') {
			$Sql2="insert into beca(institucion,nombreInstitucion,noControl) values(
					'".$_POST['institucion']."',
					'".$_POST['nombreInstitucion']."',
					'".$_SESSION['noControl']."')";

			$mysql->query($Sql2)or die($mysql-> error);	
		}*/		
		
		/*
		if ($_SESSION['trabaja']=='si') {
			$Sql3="insert into trabajo(nombreEmpresa,horario,noControl) values(
					'".$_POST['nombreEmpresa']."',
					'".$_POST['horario']."',
					'".$_SESSION['noControl']."')";

			$mysql->query($Sql3)or die($mysql-> error);		
		}	

		/*
		if (empty($_SESSION['padre']&&empty($_SESSION['madre']))&&empty($_SESSION['nHermanos'])) {
			echo '<script type="text/javascript">  window.location.href="areaFamiliar.php";</script>';
			}
			else if($_SESSION['padre']=='finado'&&$_SESSION['madre']=='finado'&&$_SESSION['nHermanos']<=0) {
					echo '<script type="text/javascript">  window.location.href="areaFamiliar.php";</script>';
			}else{
				echo '<script type="text/javascript">  window.location.href="familia.php";</script>';
			}
		}else{
			echo '<script type="text/javascript"> alert("No agrego")</script>'; 
		}*/
	}
?>

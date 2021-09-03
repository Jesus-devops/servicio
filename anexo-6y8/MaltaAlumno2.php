<?php
	session_start();
	include ("../conexion.php");
$re=$mysql->query("select noControl from extra where noControl=".$_SESSION['noControl'])or die($mysql-> error);
	$noC=0;		
		while ($f=$re->fetch_array()) { 
		$noC=$f['noControl'];			
	  	} 

		if($_SESSION['noControl']==$noC) {
		echo '<script type="text/javascript"> alert("ya existe este numero de control"); window.location.href="familia.php";</script>';

				$_SESSION['noControl']=$_POST['noControl'];
		}else{

	$Sql="insert into extra (noControl,primaria,secundaria,prepa,estudiosSuperiores,fechaDeNacimiento,lugarDeNacimiento,peso,estatura,estadoCivil,nHijos,domicilioActual,telefono,tipoVivienda,viviendaEs,nPersonas,parentesco,vivira,ingresoMFamiliar,tuIngreso,avisarNombre,avisarTelefono) values(
				'".$_SESSION['noControl']."',
				'".$_POST['primaria']."',
				'".$_POST['secundaria']."',
				'".$_POST['prepa']."',
				'".$_POST['estudiosSuperiores']."',
				'".$_POST['fechaDeNacimiento']."',
				'".$_POST['lugarDeNacimiento']."',
				'".$_POST['peso']."',
				'".$_POST['estatura']."',
				'".$_POST['estadoCivil']."',
				'".$_POST['nHijos']."',
				'".$_POST['domicilioActual']."',
				'".$_POST['telefono']."',
				'".$_POST['tipoVivienda']."',
				'".$_POST['viviendaEs']."',
				'".$_POST['nPersonas']."',
				'".$_POST['parentesco']."',
				'".$_POST['vivira']."',
				'".$_POST['ingresoMFamiliar']."',
				'".$_POST['tuIngreso']."',
				'".$_POST['avisarNombre']."',
				'".$_POST['avisarTelefono']."')";
	if ($mysql->query($Sql)or die($mysql-> error)) {
			
		if ($_SESSION['becado']=='si') {
			$Sql2="insert into beca(institucion,nombreInstitucion,noControl) values(
					'".$_POST['institucion']."',
					'".$_POST['nombreInstitucion']."',
					'".$_SESSION['noControl']."')";

			$mysql->query($Sql2)or die($mysql-> error);	
		}
			
		if ($_SESSION['trabaja']=='si') {
			$Sql3="insert into trabajo(nombreEmpresa,horario,noControl) values(
					'".$_POST['nombreEmpresa']."',
					'".$_POST['horario']."',
					'".$_SESSION['noControl']."')";

			$mysql->query($Sql3)or die($mysql-> error);		
		}	


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
		}
	}
?>

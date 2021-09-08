<?php
	include "../conexion.php";
/*
		$_SESSION['noControl']=$_POST['noControl'];
		$_SESSION['becado']=$_POST['becado'];
					$_SESSION['trabaja']=$_POST['trabaja'];
					$_SESSION['padre']=$_POST['padre'];
					$_SESSION['madre']=$_POST['madre'];
					$_SESSION['nHermanos']=$_POST['nHermanos'];
*/

	$Sql='update alumno set 
	noControl='.$_POST["noControl"].',
	carrera="'.$_POST["carrera"].'",
	semestre='.$_POST["semestre"].',
	grupo="'.$_POST["grupo"].'",
	turno="'.$_POST["turno"].'",
	apellidoP="'.$_POST["apellidoP"].'",
	apellidoM="'.$_POST["apellidoM"].'",
	nombres="'.$_POST["nombres"].'",
	sexo="'.$_POST["sexo"].'",
	edad='.$_POST["edad"].',
	email="'.$_POST["email"].'",
	CP='.$_POST["CP"].',
	escolaridad="'.$_POST["escolaridad"].'",
	nombreInstitucion="'.$_POST["nombreInstitucion"].'",
	trabaja="'.$_POST["trabaja"].'",
	padre="'.$_POST["padre"].'",
	madre="'.$_POST["madre"].'",
	becado="'.$_POST["becado"].'" 
	where noControl='.$_POST['noControl']; 

	$Sql2='update celular set 
	celular1='.$_POST["celular1"].', 
	celular2='.$_POST["celular2"].' 
	where noControl='.$_POST['noControl'];
		
			if ($mysql->query($Sql)or die($mysql-> error) and $mysql->query($Sql2)or die($mysql-> error)) {
				echo '<script type="text/javascript">  alert("Se modifico correctamente"); window.location.href="Mindex.php";</script>';
		


							}else{
					echo '<script type="text/javascript"> alert("No modifico")';
					}
?>


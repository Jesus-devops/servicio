<?php
session_start();
include "../conexion.php";

if ($mysql-> connect_error) {die("Se perdio la conexion, vuelve a intentarlo");}

$r=$mysql->query("select idAsesor from  asesor order by idAsesor desc limit 1")or die($mysql-> error);
	$noC=0;		
		while ($f=$r->fetch_array()) { 
		$noC=$f['idAsesor']+1;			
	  	} 
			
$Sql="insert into asesor (idAsesor,nombre,correo,pass) values(
	'".$noC."',
	'".$_POST['nombre']."',
	'".$_POST['correo']."',
	'".$_POST['password']."')";

	if ($mysql->query($Sql)or die($mysql-> error)) {
		echo '<script type="text/javascript"> alert("Bienvenido");</script>';
		
		$_SESSION['admin']=$_POST['nombre'];
		$_SESSION['id']=$_POST['correo'];

		header("Location: index.php");
	}

	mysqli_free_result($re);
	$mysql ->close();
?>
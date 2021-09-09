<?php

session_start();
include "../conexion.php";

if ($mysql-> connect_error) {die("Se perdio la conexion, vuelve a intentarlo");}

$re=$mysql->query("select * from asesor where correo='".$_POST['correo']."' AND pass='".$_POST['password']."'" ) or die($mysql-> error);
$nivel=0;

while ($f=$re->fetch_array()) {
		$_SESSION['admin']=$f['nombre'];
		$_SESSION['id']=$f['idAsesor'];
		$nivel=$f['nivel'];
	}
	if(isset($_SESSION['admin'])){
		if ($nivel==1) {
			header("Location: ../anexo-E/consultas.php");
		}if ($nivel==2) {
			header("Location: ../anexo-E/buscar.php");
		}else{
			echo '<script type="text/javascript">  alert("No tienes un nivel asignado, Comunicate con el adminitrador de la base de datos para que te asingne un nivel"); window.location.href="./index.php";</script>';   unset($_SESSION['admin']); 

		}
	}else{
		header("Location: ./index.php?error=datos no validos");
		echo '<center><h1>Datos No Validos/center></h1>';    unset($_SESSION['admin']); 

	}
	mysqli_free_result($re);
	$mysql ->close();

?>

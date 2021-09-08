<?php 
include ("../conexion.php");
session_start();

$Sql="update alumno set estado='baja' where noControl=".$_POST['noControl'];
$Sql2="update anexoe set estado='baja' where noControl=".$_POST['noControl'];

			$mysql->query($Sql)or die($mysql-> error);
			$mysql->query($Sql2)or die($mysql-> error);
echo '<script type="text/javascript">  alert("Se elimino correctamente"); window.location.href="./buscar.php?semestre='.$_SESSION['semestre'].'&grupo='.$_SESSION['grupo'].'&turno='.$_SESSION['turno'].'";</script>';


 ?>
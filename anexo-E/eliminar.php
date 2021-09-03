<?php 
include ("../conexion.php");
session_start();

$Sql="delete from anexoe where noControl=".$_POST['noControl'];
$Sql2="delete from observaciones where idCP=".$_POST['noControl'];
$Sql3="delete from caracteristicaspersonales where noControl=".$_POST['noControl'];
$Sql4="delete from estadopsicofisiologico where noControl=".$_POST['noControl'];
$Sql5="delete from reprobadas where noControl=".$_POST['noControl'];
$Sql6="delete from psicopedagogica where noControl=".$_POST['noControl'];
$Sql7="delete from trabajo where noControl=".$_POST['noControl'];
$Sql8="delete from padre where noControl=".$_POST['noControl'];
$Sql9="delete from madre where noControl=".$_POST['noControl'];
$Sql10="delete from hermanos where noControl=".$_POST['noControl'];
$Sql11="delete from extra where noControl=".$_POST['noControl'];
$Sql12="delete from celular where noControl=".$_POST['noControl'];
$Sql13="delete from beca where noControl=".$_POST['noControl'];
$Sql14="delete from areafamiliarysocial where noControl=".$_POST['noControl'];
$Sql15="delete from alumno where noControl=".$_POST['noControl'];

			$mysql->query($Sql)or die($mysql-> error);
			$mysql->query($Sql2)or die($mysql-> error);
			$mysql->query($Sql3)or die($mysql-> error);
			$mysql->query($Sql4)or die($mysql-> error);
			$mysql->query($Sql5)or die($mysql-> error);
			$mysql->query($Sql6)or die($mysql-> error);
			$mysql->query($Sql7)or die($mysql-> error);
			$mysql->query($Sql8)or die($mysql-> error);
			$mysql->query($Sql9)or die($mysql-> error);
			$mysql->query($Sql10)or die($mysql-> error);
			$mysql->query($Sql11)or die($mysql-> error);
			$mysql->query($Sql12)or die($mysql-> error);
			$mysql->query($Sql13)or die($mysql-> error);
			$mysql->query($Sql14)or die($mysql-> error);
			$mysql->query($Sql15)or die($mysql-> error);
			
echo '<script type="text/javascript">  alert("Se elimino correctamente"); window.location.href="./buscar.php?semestre='.$_SESSION['semestre'].'&grupo='.$_SESSION['grupo'].'&turno='.$_SESSION['turno'].'";</script>';


 ?>
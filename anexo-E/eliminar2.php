<?php 
include ("../conexion.php");
session_start();

$SqlE="select noControl from alumno where estado='baja'";
    $resultado = $mysql->query($SqlE);
$n=0;
while ($fila = $resultado->fetch_array()) {


$Sql="delete from anexoe where estado='baja' and  noControl=".$fila['noControl'];
$Sql2="delete from observaciones where idCP=".$fila['noControl'];
$Sql3="delete from caracteristicaspersonales where noControl=".$fila['noControl'];
$Sql4="delete from estadopsicofisiologico where noControl=".$fila['noControl'];
$Sql5="delete from reprobadas where noControl=".$fila['noControl'];
$Sql6="delete from psicopedagogica where noControl=".$fila['noControl'];
$Sql7="delete from trabajo where noControl=".$fila['noControl'];
$Sql8="delete from padre where noControl=".$fila['noControl'];
$Sql9="delete from madre where noControl=".$fila['noControl'];
$Sql10="delete from hermanos where noControl=".$fila['noControl'];
$Sql11="delete from extra where noControl=".$fila['noControl'];
$Sql12="delete from celular where noControl=".$fila['noControl'];
$Sql13="delete from beca where noControl=".$fila['noControl'];
$Sql14="delete from areafamiliarysocial where noControl=".$fila['noControl'];
$Sql15="delete from alumno where estado='baja' and  noControl=".$fila['noControl'];

      if ($mysql->query($Sql)or die($mysql-> error)) {
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
  $n++;
}else{
  echo '<script type="text/javascript">  alert("Se pudo eliminar");</script>';
}

}
echo '<script type="text/javascript">   alert("Se elimino correctamente a '.$n.'"); window.location.href="./consultas.php";</script>';

 ?>
<?php
	include ("../conexion.php");
$noC=0;

if (isset($_POST['noControl'])) {

	$r=$mysql->query("select noControl from alumno where noControl=".$_POST['noControl'])or die($mysql-> error);
	while ($f=$r->fetch_array()) { 
		$noC=$f['noControl'];			
	  	} 
	  	if ($noC!=0 || $noC!=null) {
	  		$noCE=0;
		$re=$mysql->query("select noControl from anexoe where noControl=".$_POST['noControl'])or die($mysql-> error);
			
		while ($f=$re->fetch_array()) { 
		$noCE=$f['noControl'];			
	  	} 

		if($_POST['noControl']==$noCE) {
		echo '<script type="text/javascript"> alert("ya existe este numero de control, seleccione *Actualizar datos* para actualizar sus datos"); window.location.href="index.php";</script>';
		}else{


$i1=0;$i2=0;$i3=0;$i4=0;$i5=0;$i6=0;$i7=0;$i8=0;$i9=0;$i10=0;
$oc1=0;$oc2=0;$oc3=0;$oc4=0;$oc5=0;$oc6=0;$oc7=0;
$sumC=0;
$sumI=0;

	if (empty($_POST['i1'])) { $i1=0; }else{ $i1=$_POST['i1']; }
	if (empty($_POST['i2'])) { $i2=0; }else{ $i2=$_POST['i2']; }
	if (empty($_POST['i3'])) { $i3=0; }else{ $i3=$_POST['i3']; }
	if (empty($_POST['i4'])) { $i4=0; }else{ $i4=$_POST['i4']; }
	if (empty($_POST['i5'])) { $i5=0; }else{ $i5=$_POST['i5']; }
	if (empty($_POST['i6'])) { $i6=0; }else{ $i6=$_POST['i6']; }
	if (empty($_POST['i7'])) { $i7=0; }else{ $i7=$_POST['i7']; }
	if (empty($_POST['i8'])) { $i8=0; }else{ $i8=$_POST['i8']; }
	if (empty($_POST['i9'])) { $i9=0; }else{ $i9=$_POST['i9']; }
	if (empty($_POST['i10'])) { $i10=0; }else{ $i10=$_POST['i10']; }


	if (empty($_POST['oc1'])) { $oc1=0; }else{ $oc1=$_POST['oc1']; }
	if (empty($_POST['oc2'])) { $oc2=0; }else{ $oc2=$_POST['oc2']; }
	if (empty($_POST['oc3'])) { $oc3=0; }else{ $oc3=$_POST['oc3']; }
	if (empty($_POST['oc4'])) { $oc4=0; }else{ $oc4=$_POST['oc4']; }
	if (empty($_POST['oc5'])) { $oc5=0; }else{ $oc5=$_POST['oc5']; }
	if (empty($_POST['oc6'])) { $oc6=0; }else{ $oc6=$_POST['oc6']; }
	if (empty($_POST['oc7'])) { $oc7=0; }else{ $oc7=$_POST['oc7']; }

$sumC= $oc1+$oc2+$oc3+$oc4+$oc5+$oc6+$oc7;
$sumI= $i1+$i2+$i3+$i4+$i5+$i6+$i7+$i8+$i9+$i10;
	$Sql="insert into anexoe (noControl,creditosAcumulados,servicioSocial,residenciasPro,titulacion,adeudaMaterias,C,CIT,PDS,PD,AE,CCB,FE,tOtrosC,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,tIngles) values(
				".$_POST['noControl'].",
				'".$_POST['creditosAcu']."',
				'".$_POST['servicioSocial']."',
				'".$_POST['residenciasPro']."',
				'".$_POST['titulacion']."',
				'".$_POST['adeudaMaterias']."',
				".$oc1.",
				".$oc2.",
				".$oc3.",
				".$oc4.",
				".$oc5.",
				".$oc6.",
				".$oc7.",
				".$sumC.",
				".$i1.",
				".$i2.",
				".$i3.",
				".$i4.",
				".$i5.",
				".$i6.",
				".$i7.",
				".$i8.",
				".$i9.",
				".$i10.",
				".$sumI.")";

			if ($mysql->query($Sql)or die($mysql-> error)) {
			
			echo '<script type="text/javascript">  alert("Agregado Correctamente"); window.location.href="../index.php";</script>';
				}else{
					echo '<script type="text/javascript"> alert("No agrego")';
					}
		}
	
}else{
	echo '<script type="text/javascript">  alert("Este numero de control no esta registrado en el anexo 6 y 8"); window.location.href="../anexo-6y8/";</script>';
}
}


?>

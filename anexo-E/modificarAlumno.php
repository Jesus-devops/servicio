<?php
	include ("../conexion.php");

$i1=0;$i2=0;$i3=0;$i4=0;$i5=0;$i6=0;$i7=0;$i8=0;$i9=0;$i10=0;
$oc1=0;$oc2=0;$oc3=0;$oc4=0;$oc5=0;$oc6=0;$oc7=0;

	if (empty($_POST['i1'])||$_POST['i1']==0) { $i1=0; }else{ $i1=$_POST['i1']; }
	if (empty($_POST['i2'])||$_POST['i2']==0) { $i2=0; }else{ $i2=$_POST['i2']; }
	if (empty($_POST['i3'])||$_POST['i3']==0) { $i3=0; }else{ $i3=$_POST['i3']; }
	if (empty($_POST['i4'])||$_POST['i4']==0) { $i4=0; }else{ $i4=$_POST['i4']; }
	if (empty($_POST['i5'])||$_POST['i5']==0) { $i5=0; }else{ $i5=$_POST['i5']; }
	if (empty($_POST['i6'])||$_POST['i6']==0) { $i6=0; }else{ $i6=$_POST['i6']; }
	if (empty($_POST['i7'])||$_POST['i7']==0) { $i7=0; }else{ $i7=$_POST['i7']; }
	if (empty($_POST['i8'])||$_POST['i8']==0) { $i8=0; }else{ $i8=$_POST['i8']; }
	if (empty($_POST['i9'])||$_POST['i9']==0) { $i9=0; }else{ $i9=$_POST['i9']; }
	if (empty($_POST['i10'])||$_POST['i10']==0) { $i10=0; }else{ $i10=$_POST['i10']; }


	if (empty($_POST['oc1'])) { $oc1=0; }else{ $oc1=$_POST['oc1']; }
	if (empty($_POST['oc2'])) { $oc2=0; }else{ $oc2=$_POST['oc2']; }
	if (empty($_POST['oc3'])) { $oc3=0; }else{ $oc3=$_POST['oc3']; }
	if (empty($_POST['oc4'])) { $oc4=0; }else{ $oc4=$_POST['oc4']; }
	if (empty($_POST['oc5'])) { $oc5=0; }else{ $oc5=$_POST['oc5']; }
	if (empty($_POST['oc6'])) { $oc6=0; }else{ $oc6=$_POST['oc6']; }
	if (empty($_POST['oc7'])) { $oc7=0; }else{ $oc7=$_POST['oc7']; }

$sumC=0;
$sumI=0;
$sumC= $oc1+$oc2+$oc3+$oc4+$oc5+$oc6+$oc7;
$sumI= $i1+$i2+$i3+$i4+$i5+$i6+$i7+$i8+$i9+$i10;

	
$Sql='update anexoe set creditosAcumulados="'.$_POST['creditosAcu'].'", servicioSocial="'.$_POST['servicioSocial'].'",    residenciasPro="'.$_POST['residenciasPro'].'",   titulacion="'.$_POST['titulacion'].'", adeudaMaterias="'.$_POST['adeudaMaterias'].'", C='.$oc1.',CIT='.$oc2.',PDS='.$oc3.',PD='.$oc4.',AE='.$oc5.',CCB='.$oc6.',FE='.$oc7.', n1='.$i1.',n2='.$i2.',n3='.$i3.',n4='.$i4.',n5='.$i5.',n6='.$i6.',n7='.$i7.',n8='.$i8.',n9='.$i9.',n10='.$i10.',tOtrosC='.$sumC.',tIngles='.$sumI.'
	
	where noControl='.$_POST['noControl'];

	if ($mysql->query($Sql)or die($mysql-> error)) {						
			echo '<script type="text/javascript">  alert("Se modifico correctamente"); window.location.href="./index.php";</script>';
				}else{
					echo '<script type="text/javascript"> alert("No agrego")'; 
				}
	

?>

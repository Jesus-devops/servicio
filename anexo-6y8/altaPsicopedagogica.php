<?php
	session_start();
	include ("../conexion.php");		
		
		$Sql="insert into psicopedagogica (idPP,ser,ayudaTareas,problemasPersonales,rendimientoEscolar,asignaturasTienes,favorita,fPor,sobresales,
		sPor,desagrada,dPor,materiaBaja,bPor,vienesTec,motivaVenir,promedioAnterior,reprobadas,inmediatos,metasVida,yoSoy,caracterEs,meGusta,aspiroVida,miedoDe,piensoLograr,noControl) values(
					'".$_SESSION['noControl']."',
					'".$_POST['ser']."',
					'".$_POST['ayudaTareas']."',
					'".$_POST['problemasP']."',
					'".$_POST['rendimientoEscolar']."',
					'".$_POST['asignaturasTienes']."',
					'".$_POST['favorita']."',
					'".$_POST['favoritaPorque']."',
					'".$_POST['sobresales']."',
					'".$_POST['sobresalesPorque']."',
					'".$_POST['desagrada']."',
					'".$_POST['desagradaPorque']."',
					'".$_POST['bajoAnterior']."',
					'".$_POST['bajoPorque']."',
					'".$_POST['tecVienes']."',
					'".$_POST['motivaVenir']."',
					'".$_POST['promedioAnterior']."',
					'".$_POST['reprobadas']."',
					'".$_POST['inmediatos']."',
					'".$_POST['metasVida']."',
					'".$_POST['yoSoy']."',
					'".$_POST['caracterEs']."',
					'".$_POST['meGusta']."',
					'".$_POST['aspiroVida']."',
					'".$_POST['miedoDe']."',
					'".$_POST['piensoLograr']."',
					'".$_SESSION['noControl']."')";
		if ($mysql->query($Sql)or die($mysql-> error)) {

			if ($_POST['reprobadas']=='si') {
				if ($_POST['materia1']!='') {
					$Sql2="insert into reprobadas(nombre, noControl) values(
					'".$_POST['materia1']."',
					'".$_SESSION['noControl']."')";
					$mysql->query($Sql2)or die($mysql-> error);
				}
				if ($_POST['materia2']!='') {
					$Sql3="insert into reprobadas(nombre, noControl) values(
					'".$_POST['materia2']."',
					'".$_SESSION['noControl']."')";
					$mysql->query($Sql3)or die($mysql-> error);
				}
				if ($_POST['materia3']!='') {
					$Sql4="insert into reprobadas(nombre, noControl) values(
					'".$_POST['materia3']."',
					'".$_SESSION['noControl']."')";
					$mysql->query($Sql4)or die($mysql-> error);
				}



			}
			echo '<script type="text/javascript"> window.location.href="estadofisiologico.php";</script>';
					}else{
						echo '<script type="text/javascript"> alert("No agrego")'; 
					}
?>

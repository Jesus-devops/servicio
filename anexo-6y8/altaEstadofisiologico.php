<?php
	session_start();

	include ("../conexion.php");
	
$p='';
	if ($_POST['prescripcionTiene']=='no') {
		$p='';
	}else{
		$p=$_POST['prescripcionCual'];
	}
	

		$Sql="insert into estadopsicofisiologico (tienePrescripcion,cualPrescripcion,manosPiesHinchados,dolorVientre,dolorCabezaVomito,perdidaEquilibrio,
		fatigaAgotamiento,perdidaVistaOido,DificilDormir,pesadillasTerrorNocturnoA,incontinencia,tartamudeo,miedoIntensoA,observacionesHigiene,noControl) values(
							'".$_POST['prescripcionTiene']."',
							'".$p."',
							'".$_POST['manosPiesHinchados']."',
							'".$_POST['dolorVientre']."',
							'".$_POST['dolorCabezaVomito']."',
							'".$_POST['perdidaEquilibrio']."',
							'".$_POST['fatigaAgotamiento']."',
							'".$_POST['perdidaVistaOido']."',
							'".$_POST['DificilDormir']."',
							'".$_POST['pesadillasTerrorNocturnoA']."',
							'".$_POST['incontinencia']."',
							'".$_POST['tartamudeo']."',
							'".$_POST['miedoIntensoA']."',
							'".$_POST['observacionesHigiene']."',
							'".$_SESSION['noControl']."')";


		$Sql2="insert into caracteristicaspersonales (idCP,puntual,timido,alegre,agresivo,abiertoIdeas,reflexivo,constante,optimista,impulsivo,silencioso,generoso,inquieto,humor,dominante,egoista,sumiso,confiado,imaginativo,iniciativa,sociable,responsable,perseverante,motivado,activo,independiente,noControl) values(
						'".$_SESSION['noControl']."',		
						'".$_POST['puntual']."',
						'".$_POST['timido']."',
						'".$_POST['alegre']."',
						'".$_POST['agresivo']."',
						'".$_POST['abiertoIdeas']."',
						'".$_POST['reflexivo']."',
						'".$_POST['constante']."',
						'".$_POST['optimista']."',
						'".$_POST['impulsivo']."',
						'".$_POST['silencioso']."',
						'".$_POST['generoso']."',
						'".$_POST['inquieto']."',
						'".$_POST['humor']."',
						'".$_POST['dominante']."',
						'".$_POST['egoista']."',
						'".$_POST['sumiso']."',
						'".$_POST['confiado']."',
						'".$_POST['imaginativo']."',
						'".$_POST['iniciativa']."',
						'".$_POST['sociable']."',
						'".$_POST['responsable']."',
						'".$_POST['perseverante']."',
						'".$_POST['motivado']."',
						'".$_POST['activo']."',
						'".$_POST['independiente']."',
						'".$_SESSION['noControl']."')";

		$Sql3="insert into observaciones (idCP,puntualO,timidoO,alegreO,agresivoO,abiertoIdeasO,reflexivoO, constanteO,optimistaO,impulsivoO,silenciosoO,generosoO,inquietoO,humorO,dominanteO,egoistaO,sumisoO,confiadoO,imaginativoO, iniciativaO,sociableO,responsableO,perseveranteO,motivadoO,activoO,independienteO) values(	
						'".$_SESSION['noControl']."',	
						'".$_POST['puntualO']."',
						'".$_POST['timidoO']."',
						'".$_POST['alegreO']."',
						'".$_POST['agresivoO']."',
						'".$_POST['abiertoIdeasO']."',
						'".$_POST['reflexivoO']."',
						'".$_POST['constanteO']."',
						'".$_POST['optimistaO']."',
						'".$_POST['impulsivoO']."',
						'".$_POST['silenciosoO']."',
						'".$_POST['generosoO']."',
						'".$_POST['inquietoO']."',
						'".$_POST['humorO']."',
						'".$_POST['dominanteO']."',
						'".$_POST['egoistaO']."',
						'".$_POST['sumisoO']."',
						'".$_POST['confiadoO']."',
						'".$_POST['imaginativoO']."',
						'".$_POST['iniciativaO']."',
						'".$_POST['sociableO']."',
						'".$_POST['responsableO']."',
						'".$_POST['perseveranteO']."',
						'".$_POST['motivadoO']."',
						'".$_POST['activoO']."',
						'".$_POST['independienteO']."')";


	if ($mysql->query($Sql)or die($mysql-> error)) {
		if ($mysql->query($Sql2)or die($mysql-> error)) {
			if ( $_POST['puntualO']!=''||$_POST['timidoO']!=''||$_POST['alegreO']!=''
		||$_POST['agresivoO']!=''||$_POST['silenciosoO']!=''||$_POST['sumisoO']!=''
		||$_POST['abiertoIdeasO']!=''||$_POST['generosoO']!=''||$_POST['confiadoO']!=''
		||$_POST['reflexivoO']!=''||$_POST['inquietoO']!=''||$_POST['imaginativoO']!=''
		||$_POST['constanteO']!=''||$_POST['humorO']!=''||$_POST['iniciativaO']!=''
		||$_POST['optimistaO']!=''||$_POST['dominanteO']!=''||$_POST['sociableO']!=''
		||$_POST['impulsivoO']!=''||$_POST['egoistaO']!=''||$_POST['responsableO']!=''
		||$_POST['perseveranteO']!=''||$_POST['motivadoO']!=''||$_POST['activoO']!=''
		||$_POST['independienteO']!=''||$_POST['timidoO']!=''||$_POST['timidoO']!=''
		||$_POST['timidoO']!=''||$_POST['timidoO']!=''||$_POST['timidoO']!='') 
			{
				$mysql->query($Sql3)or die($mysql-> error);		
			}
		}else{
			echo '<script type="text/javascript"> alert("No agrego")'; 
		}
	
		unset($_SESSION['noControl']);
		unset($_SESSION['becado']);
		unset($_SESSION['trabaja']);
		unset($_SESSION['padre']);
		unset($_SESSION['madre']);
		unset($_SESSION['nHermanos']);
				
		echo '<script type="text/javascript"> alert("Registro completo, Gracias"); window.location.href="index.php";</script>';		
		}else{
				echo '<script type="text/javascript"> alert("No agrego")'; 
			}		
?>

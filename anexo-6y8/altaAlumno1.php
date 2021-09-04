<?php

$servername = "localhost";
    $username = "root";
  	$password = "1234";
  	$dbname = "alumno";
 
	$mysql = new mysqli($servername, $username, $password, $dbname);
      if($mysql->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }


	$noC=0;
if(!isset($_POST['noControl'])){
		header("Location: index.php");
}else{
		$allowedExts = array("jpeg", "jpg", "png","xbm","xpm","wbmp","tiff","psd","bmp");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$foto="";
			$random=rand(1,999999999);
		if (	($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/png")
				|| ($_FILES["file"]["type"] == "image/xbm")
				|| ($_FILES["file"]["type"] == "image/xpm")
				|| ($_FILES["file"]["type"] == "image/wbmp")
				|| ($_FILES["file"]["type"] == "image/tiff")
				|| ($_FILES["file"]["type"] == "image/psd")
				|| ($_FILES["file"]["type"] == "image/bmp")
			){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$foto= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("./fotos/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"./fotos/" .$random.'_'.$_FILES["file"]["name"]);
		      		
		$re=$mysql->query("select noControl from alumno where noControl=".$_POST['noControl'])or die($mysql-> error);
			
		while ($f=$re->fetch_array()) { 
		$noC=$f['noControl'];			
	  	} 

		if($_POST['noControl']==$noC) {
			session_start();
		$_SESSION['noControl']=$_POST['noControl'];
		$_SESSION['becado']=$_POST['becado'];
					$_SESSION['trabaja']=$_POST['trabaja'];
					$_SESSION['padre']=$_POST['padre'];
					$_SESSION['madre']=$_POST['madre'];
					$_SESSION['nHermanos']=$_POST['nHermanos'];

		echo '<script type="text/javascript"> alert("ya existe este numero de control"); window.location.href="alumno2.php";</script>';

				
		}else{
		

	$Sql="insert into alumno (noControl,foto,carrera,semestre,grupo,turno,apellidoP,apellidoM,nombres,fecha,sexo,edad,email,CP,escolaridad,nombreInstitucion,trabaja,padre,madre,becado,idAsesor) values(
				".$_POST['noControl'].",
				'".$foto."',
				'".$_POST['carrera']."',
				'".$_POST['semestre']."',
				'".$_POST['grupo']."',
				'".$_POST['turno']."',
				'".$_POST['apellidoP']."',
				'".$_POST['apellidoM']."',
				'".$_POST['nombres']."',
				CURDATE(),
				'".$_POST['sexo']."',
				'".$_POST['edad']."',
				'".$_POST['email']."',
				'".$_POST['CP']."',
				'".$_POST['escolaridad']."',
				'".$_POST['nombreInstitucion']."',
				'".$_POST['trabaja']."',
				'".$_POST['padre']."',
				'".$_POST['madre']."',
				'".$_POST['becado']."',
				0)";

	$Sql2="insert into celular(celular1, celular2, noControl) values(
		'".$_POST['celular1']."',
		'".$_POST['celular2']."',
		'".$_POST['noControl']."')";

			if ($mysql->query($Sql)or die($mysql-> error)) {
				if ($_POST['celular1']!=0 || $_POST['celular2'] !=0) {
					$mysql->query($Sql2);	
				}
				
				session_start();
					$_SESSION['noControl']=$_POST['noControl'];
					$_SESSION['becado']=$_POST['becado'];
					$_SESSION['trabaja']=$_POST['trabaja'];
					$_SESSION['padre']=$_POST['padre'];
					$_SESSION['madre']=$_POST['madre'];
					$_SESSION['nHermanos']=$_POST['nHermanos'];

			echo '<script type="text/javascript">  window.location.href="alumno2.php";</script>';
				}else{
					echo '<script type="text/javascript"> alert("No agrego")';
					}

		}
				}
			}
		}echo "<h1>error en tipo de imagen<h1>";
				echo '<script type="text/javascript"> alert("Error en tipo de imagen o tamaño de la imagen"); window.location.href="index.php";</script>';
	}

$mysql->close();
?>

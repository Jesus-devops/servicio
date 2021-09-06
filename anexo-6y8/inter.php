
  <?php
session_start();
include "../conexion.php";

$_SESSION['noControl']=$_POST['noControl'];


if (isset($_SESSION['noControl'])&&$_SESSION['noControl']!=0) {
	
$re=$mysql->query("select noControl from alumno where noControl=".$_SESSION['noControl'])or die($mysql-> error);
		$noC=0;	
		while ($f=$re->fetch_array()) { 
		$noC=$f['noControl'];			
	  	} 

		if($_SESSION['noControl']==$noC) {

				echo '<script type="text/javascript">  window.location.href="menuM.php";</script>';
		}else {
		echo '<script type="text/javascript"> alert("Este alumno no se ha dado de alta"); window.location.href="index.php";</script>';
	}	

}else {
		echo '<script type="text/javascript"> alert("Se perdio la sesion"); </script>';
	}	
?>
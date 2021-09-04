<?php 
$con = $mysql= new mysqli("localhost","root","1234","alumno");
if ($mysql-> connect_error) {
	die("problemas con la conexion a la base de datos");
	echo $mysql-> connect_error;
}
mysqli_set_charset($con, 'utf8');
 ?>
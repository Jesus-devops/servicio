<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro</title>
	<link rel="shortcut icon" href="../icono.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >
</head>	
<body id="log">
	<center>
		<div id="contenedor">
			
		<a href="../index.php"><img src="../logo.png" id="logo" style="margin-top: 20px;"></a>
<br><br><br>
	<section>

	<form id="login" method="post" action="registrar.php">
<br>
        <?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
		<label for="nombre">Nombre:</label><br>
		<input type="text" name="nombre" placeholder="Nombre" id="estudios" class="form-control" required>
		<label for="correo">Correo:</label><br>
		<input type="email" name="correo" placeholder="Correo" id="estudios" class="form-control" required>
		<label for="password">Password:</label><br>
		<input type="password" name="password" placeholder="Password" id="estudios" class="form-control" required><br>
		<input type="submit" name="aceptar" value="Registrate" style="height: 45px;" class="btn btn-dark" id="btn">
		<br><br>
	</form>
	</section>
</div>
</center>
</body>
</html>
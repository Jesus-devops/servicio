<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Login</title>
	<link rel="shortcut icon" href="../icono.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"  >
</head>	
<body id="log">
	<center>
		<a href="../anexo-E/"><img src="../logo.png" id="logo" style="margin-top: 20px;"></a>
<ul class="nav nav" style="margin: 5px; display: block;">
  	<li class="nav-item">
   	 	<a class="btn btn-primary" href="../index.php" >Página principal</a>
  	</li>
</ul>			
<br><br>
	<section>

	<form id="login" method="post" action="verificar.php" style="    box-shadow: 0px 8px 13px 5px #000000a1;">
<br>
        <?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
		<label for="correo">Correo:</label><br>
		<div class="input-group" id="largo">
			<input type="text" name="correo" placeholder="Correo" id="estudios" class="form-control" required></div>
		<label for="password">Password:</label><br>
		<div class="input-group" id="largo">
			<input type="password" name="password" placeholder="Password" id="estudios" class="form-control" required></div>
		<input type="submit" name="aceptar" value="Iniciar Sesión" style="height: 45px;" class="btn btn-dark" id="btn"><br><br>
	
		<a href="registro.php" tittle="Registro">Registrate</a><br>
	</form>
	</section><br><br>
</center>
</body>
</html>
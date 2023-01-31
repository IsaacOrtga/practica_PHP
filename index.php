<?php
include 'classConexion.php'; /*Incluimos la carpeta conexion*/
$conectar=new conexion();
if (isset($_POST['uname']) and isset($_POST['psw']))
{
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];
	$consulta="select * from users "
	."where users.name_u='$uname' and users.password_u='$psw'";
	$conectar->consulta($consulta);
	if($conectar->num_rows() > 0)
	{                      
		header("Location:busqueda.php");

	}
	else
	{
		header("Location:index.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="Post">
		<div class="container">
			<label for="uname"><b>Usuario</b></label>
			<input type="text" placeholder="Ingresar Username" name="uname" required>
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Ingresar Password" name="psw" required>
			<button type="submit">Logear</button>
		</div>
	</form>
</body>
</html>

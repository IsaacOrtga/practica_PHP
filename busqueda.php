<?php
include 'classConexion.php';
$conectar = new conexion();
if (isset($_GET['search'])) {
	$info = $_GET['search'];
	$total_consultas = "select * from users where users.name_u='$info' ";
	$conectar->results($total_consultas);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Búsqueda</title>
</head>

<body>
	<h1>Búsqueda</h1>
	<form action="busqueda.php" method="Get">
		<input type="text" id="mySearch" name="search" placeholder="Buscar..">
		<button type="submit">Buscar</button>
		<ul>
			<?php
			foreach ($data as $value => $info) {
				echo '<li>' . $value . '<li>';
			}
			?>
		</ul>
	</form>
</body>
</html>
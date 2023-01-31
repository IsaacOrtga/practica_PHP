<?php
include 'classConexion.php';
$conectar = new conexion();
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
		<table border='1'>
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Password</th>
			</tr>
			<?php
			if (isset($_GET['search'])) {
				$info = $_GET['search'];
				$consulta = "select * from users where users.name_u='$info' ";
				$conectar->consulta($consulta);
				$mostrar = $conectar->results();
				foreach ((array) $mostrar as $row) {
					echo '<tr>';
					echo '<td>' . $row['user_id'] . '</td>';
					echo '<td>' . $row['name_u'] . '</td>';
					echo '<td>' . $row['password_u'] . '</td>';
					echo '</tr>';
				}
			}
			?>
		</table>
		<table border='1'>
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Password</th>
			</tr>
			<?php
			if (isset($_GET['search'])) {
				$info = $_GET['search'];
				$consulta = "select * from users where users.name_u='$info' ";
				$conectar->consulta($consulta);
				$mostrar = $conectar->results();
				while (isset($info)) {
					echo '<tr>';
					echo '<td>' . $row['user_id'] . '</td>';
					echo '<td>' . $row['name_u'] . '</td>';
					echo '<td>' . $row['password_u'] . '</td>';
					echo '</tr>';
					break;
				}
			}
			?>
		</table>
		<table border='1'>
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Password</th>
			</tr>
			<?php

			if (isset($_GET['search'])) {
				$info = $_GET['search'];
				$consulta = "select * from users where users.name_u='$info' ";
				$conectar->consulta($consulta);
				$mostrar = $conectar->results();
				for ($i = 0; $i < count($mostrar); $i++) {
					echo '<tr>';
					echo '<td>' . $row['user_id'] . '</td>';
					echo '<td>' . $row['name_u'] . '</td>';
					echo '<td>' . $row['password_u'] . '</td>';
					echo '</tr>';
		
				}
			}

			?>
		</table>
	</form>
</body>

</html>
<?php
include 'classConexion.php';
$conexion = new conexion();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
 
    $query = "DELETE FROM users WHERE user_id = '$id'";
    $conexion->consulta($query);
}else{
    echo 'Datos vacíos';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action='./form_registro.php' method='POST'>
        <!-- <input type='text' placeholder="nombre" name="nombre" />
        <input type='text' placeholder="apellidos" name="apellidos" /> -->
        <!-- <input type='text' placeholder="alias" name="alias" />
        <input type='email' placeholder="email" name="email" /> -->
        <input type='number' placeholder="id" name="id" />
        <!-- <input type='password' placeholder="contraseña" name="confirm" /> -->
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
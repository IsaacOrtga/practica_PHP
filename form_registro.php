<?php
include 'classConexion.php';
$conexion = new conexion();

if (isset($_POST['name']) and isset($_POST['surname']) and isset($_POST['alias']) and isset($_POST['email']) and isset($_POST['pass']) and isset($_POST['confirm'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $alias = $_POST['alias'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirm = $_POST['confirm'];
 
    $query = "INSERT INTO users (name_u, surname, alias, email, password_u, confirm_password) VALUES ('$name', '$surname', '$alias', '$email', '$pass', '$confirm')";
    $conexion->consulta($query);
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
        <input type='text' placeholder="nombre" name="name" />
        <input type='text' placeholder="apellidos" name="surname" /> 
        <input type='text' placeholder="alias" name="alias" />
        <input type='email' placeholder="email" name="email" /> 
        <input type='text' placeholder="contraseña" name="pass" />
        <input type='text' placeholder="contraseña" name="confirm" />
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
<?php

$error = "faltan_valores";//flag de comprobación


if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad'])
&& !empty($_POST['email']) && !empty($_POST['pass'])) {
    // Si todos los campos están llenos, establecer el flag en OK
    $error = "OK";
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
} else {
    // Si algún campo está vacío, se mantiene el flag en 'faltan_valores'
    header("Location:index.php?error=$error");
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Gracias por contactar!</h2>
</body>
</html>
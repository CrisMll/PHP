<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Acceso a web adultos</title>
</head>
<body>
<section class="formulario">
    <h2>Acceso permitido para mayores de 18 años: </h2>
    <form method="post">
        <label for="edad">Edad : </label>
        <input type="text" id="edad" name="edad" placeholder="Introduce tu edad">
        <button type="submit">Enviar</button>
    </form>
</section>

<?php

//COMPROBACION DATOS DE FORMULARIO
//EJEMPLO ACCESO POR EDAD


if($_SERVER['REQUEST_METHOD']==='POST') {

    if (isset($_POST['edad'])) {
        $edad = (int)$_POST['edad'];
        if ($edad >= 18) {
            echo 'Tienes acceso';
        } else {
            echo 'Eres menor';
        }
    } else {
        echo 'No se ha introducido la edad';
    }
}else{
    echo 'El formulario no contiene datos';
}
?>

</body>
</html>
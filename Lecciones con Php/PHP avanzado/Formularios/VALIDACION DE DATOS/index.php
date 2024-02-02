<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Es importante validar los formularios con reglas y patrones para asegurarnos de recibir los datos deseados -->
    <h1>Validar formularios en PHP</h1>

    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan_valores'){
                echo "<p class='mensaje_error'><strong>Faltan valores, completa todos los campos</strong></p>"; 
            }

        }
    ?>


    <section class="formulario_contacto">
        <form action="procesar_formulario.php" method="post">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" required pattern="[A-Za-z]+">

            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" id="apellidos" required >

            <label for="edad">Edad: </label>
            <input type="number" name="edad" id="edad" required pattern="[0-9]+>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required>

            <label for="pass">Contraseña: </label>
            <input type="password" name="pass" id="pass" placeholder="Mínimo 8 caracteres" required minlength="8">
            
            <button type="submit">Enviar datos</button>
        </form>
    </section>
</body>

</html>
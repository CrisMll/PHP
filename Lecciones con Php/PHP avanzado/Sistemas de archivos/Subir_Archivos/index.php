<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imagenes con PHP</title>
</head>
<body>
    <h1>Subir imagenes con PHP</h1>
    <section class="subida_archivos">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <p><label for="archivo">Sube tu imagen</label></p>
            <p><input type="file" name="archivo[]" id="archivo" multiple require/></p>
            <p><button type="submit">Subir</button></p>
        </form>
    </section>
</body>
</html>
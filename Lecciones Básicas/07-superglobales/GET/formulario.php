<!--Método GET para recoger información. Es menos seguro ya que muestra datos en URL-->

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <section class="formulario">
            <h2>Método GET</h2>
            <form method="get" action="recibir.php"> <!--action indica qué página recibe los datos, en este caso del método GET-->
            <!--Los parámetros get cuando se reciben suelen ser cuando aparecen en la url ?nombre=valor&nombre=hola, etc-->
                <p>
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre"/>
                </p>
                <p>
                <label for="apellidos">Apellidos: </label>
                <input type="text" id="apellidos" name="apellidos"/>
                </p>
                <p>
                <label for="telefono">Teléfono: </label>
                <input type="tel" id="telefono" name="telefono">
                </p>
                <button type="submit">Enviar</button>
                <!--Se incluyen dentro de parrafo porque no vamos a usar CSS para el ejemplo-->
            </form>
        </section>
    </body>
</html>
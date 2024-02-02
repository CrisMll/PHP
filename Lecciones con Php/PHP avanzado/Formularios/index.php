

<!--//Los formularios permiten recibir información del usuario
VAMOS A CREAR UN FORMULARIO CON LOS CAMPOS MÁS COMUNES-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <title>Formularios con PHP y HTML</title>
</head>
<body>
<h1>Formulario de prueba</h1>
<!--no se pretende estilar con css esta practica-->
<form action="" method="post" enctype="multipart/form-data">
    <label for="nombre">Introduce tu nombre: </label>
    <input type="text" id="nombre" name="nombre" autofocus="autofocus" placeholder="Nombre" pattern="[A-Za-z ]+" required><br/>

    <label for="apellidos">Introduce tus apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" maxlength="50" minlength="3" required><br/>

    <label>Elige una opción: </label>
    <p>
        <input type="checkbox" id="hombre" name="identidad" value="hombre">
        <label for="hombre">Hombre</label>

        <input type="checkbox" id="mujer" name="identidad" value="mujer">
        <label for="mujer">Mujer</label>

        <input type="checkbox" id="otro" name="identidad" value="otro">
        <label for="otro">Otro</label>
    </p>

    <p>
        <label for="color">Color:</label>
        <input type="color" id="color" name="color"><br/>
    </p>

    <p>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha">
    </p>

    <p>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </p>

    <p>
        <label for="file">Subir archivo:</label>
        <input type="file" id="file" name="file" multiple>
    </p>

    <p>
        <label for="number">Números:</label>
        <input type="number" id="number" name="number">
    </p>

    <p>
        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="pass">
    </p>

    <p>
        <label>Continente:</label>
        <input type="radio" id="continente_america_latina" name="continente" value="América Latina">
        <label for="continente_america_latina">América Latina</label>

        <input type="radio" id="continente_europa" name="continente" value="Europa">
        <label for="continente_europa">Europa</label>

        <input type="radio" id="continente_asia" name="continente" value="Asia">
        <label for="continente_asia">Asia</label>

        <input type="radio" id="continente_america_norte" name="continente" value="América del Norte">
        <label for="continente_america_norte">América del Norte</label>

        <input type="radio" id="continente_africa" name="continente" value="África">
        <label for="continente_africa">África</label>
    </p>

    <p>
        <label for="web">Página Web:</label>
        <input type="url" id="web" name="web">
    </p>

    <p>
        <label for="textarea">Escribe tu mensaje:</label>
    </p>
        <textarea id="textarea"></textarea>


    <p>
        <label for="select">Películas: </label>
        <select id="select" name="peliculas">
            <option value="batman">Batman</option>
            <option value="spiderman">Spiderman</option>
            <option value="vengadores">Los Vengadores</option>
        </select>
    </p>

    <button type="submit">Enviar</button><br/>
</form>
</body>
</html>

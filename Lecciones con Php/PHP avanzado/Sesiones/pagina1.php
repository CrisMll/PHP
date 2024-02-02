<?php
//Probamos las variables de Sesiones.php en el archivo pagina1.php
//para utilizar las variables de sesión hay que iniciar la sesión en cada página donde se quiera usar

session_start();

/*si quisiéramos mostrar la variable local, nos daría error
echo $variable_normal;
Sin embargo, sí podremos cargar la variable de sesión.
*/

echo nl2br($_SESSION['variable_persistente']."\n"); //cargaría sin problema
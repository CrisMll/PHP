<?php

/*Las Sesiones son estructuras propias de php que reconoce su intérprete
* y nos permite guardar valores para usarlos en otras páginas, documentos , etc en nuestro sitio web.
* por ejemplo un carrito de compra de una web.
*/


//Iniciar sesion con la función session_start();

session_start();

//variable local
$variable_normal = "Soy una cadena de texto";
//variable de sesión que se podrá usar en cualquier página de mi dominio web.Son como arrays asociativos.
$_SESSION['variable_persistente'] = "<h2>Hola, soy una sesión activa</h2>";

echo nl2br("$variable_normal \n");
echo nl2br($_SESSION['variable_persistente']."\n");

/*
 * En navegadores modernos, al cerrarlos, es posible que se mantenga la sesión durante un tiempo(no así en versiones antiguas)
 * Pero esto se puede manejar, tanto para cerrar sesión, con session_destroy(), como guardarla.
 * */


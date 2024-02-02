<?php

/*Rastrean cierta información del usuario, y es uno de los puntos más "vulnerables" de la web si no se controlan
*porque se guardan en el cliente. Generan un fichero que se guarda en el navegador y se le envia al servidor cuando carga la web
 * VENTAJAS:
 * Se guardan incluso si se cierra el navegador, recuerdan inicios de sesión, almacenan valores temporales del usuario
 * DESVENTAJAS:
 * A diferencia de las sesiones, se almacenan en el cliente y tienen almacenamiento algo limitado. Se pasan al server cada vez que se carga la pagina.
 * Son fácilmente rastreables y son un punto muy polémico actualmente por "protección de datos"
*/


// CREAR COOKIE
//setcokie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);


//Básica
setcookie("micookie","valor de mi galleta");
//Con expiración
setcookie("micookie_unyear","valor de mi galleta de 365 días", time()+(60*60*24*365));

header('Location:ver_cookies.php'); //redirecciona a la página

?>


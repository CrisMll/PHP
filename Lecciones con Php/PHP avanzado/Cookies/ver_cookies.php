<?php

//Para mostrar el valor de las cookies se usa la variable superglobal y array asociativo, $_COOKIE

if(isset($_COOKIE['micookie'])){
    echo "<h2>".$_COOKIE['micookie']."</h2>";
}else{
    echo 'No existe la cookie';
}

//Si abrimos la consola, en la sección de aplicaciones aparecerán todas las cookies guardadas

if(isset($_COOKIE['micookie_unyear'])){
    echo "<h2>".$_COOKIE['micookie_unyear']."</h2>";
}else{
    echo 'No existe la cookie';
}

?>
<!--enlace para crear cookies-->
<a href = 'cookies.php'>Crear cookies</a>
<!--enlace para borrar cookies-->
<a href = 'borrar_cookies.php'>Borrar cookies</a>
<?php

//CONSTANTES
/*Es un contenedor de información cuyo contenido no puede cambiar.
 *Las constantes se definen con la función 'define'.
 * Para acceder a ellas, se indica el nombre sin símbolo $ */

define('nombre','Cristina Morales');
define('web','krispitina.es');

echo nombre.'</br>';
echo web;

//ALGUNAS CONSTANTES PREDEFINIDAS

echo PHP_OS;
echo PHP_VERSION;
echo __LINE__;

function holaMundo(){
    echo __FUNCTION__;
}
holaMundo();
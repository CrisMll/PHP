<?php

/*
 * TIPOS DE DATOS:
 *
 * Entero (INT/INTEGER) = 9
 * Coma flotante (float/double) = 9.45
 * Cadenas (string) = 'Hola mundo'
 * Booleano (bool) = true/false . En este caso, true se muestra como 1 y false como 0 aunque no aparece en pantalla.
 * Nulo (null)
 * Array o vectores (colección de datos)  = []
 * Objetos
 *
 *
 * En php no hace falta indicar el tipo de dato al definirla
 * porque tiene tipado débil. Php ya reconoce el tipo de dato.
 * */

$numero = 9;
$decimal = 9.5;
$cadena = 'Hola, PHP';
$bool = true;

echo 'El tipo de variable '.$numero.' es: '.gettype($numero).'</br>';
echo 'El tipo de variable '.$decimal.' es: '.gettype($decimal).'</br>';
echo 'El tipo de variable '.$cadena.' es: '.gettype($cadena).'</br>';
echo 'El tipo de variable '.$bool.' es: '.gettype($bool).'</br>';


/*DEBUG
 * Esto permite recibir informacion del contenido de la variable, funcion, etc
 * Con var_dump te indica el contenido, la longitud, la ruta, etc
 * También hay herramientas más limpias que debuguean en consola sin imprimir por lo que el código es más limpio*/

$mi_nombre = 'Cristina';
var_dump($mi_nombre);

/*STRINGS
 *En php se concatena con un punto.
 * En el String con comillas dobles no hace falta concatenar con .
 * Dentro de las comillas se puede pedir el valor de una variable, con las simples no se puede.
 * EJEMPLO:
 * $numero = 8;
 * echo "Mi numero elegido es $numero";
 *
 * Tambien se pueden usar saltos de linea con /n
 * */

?>

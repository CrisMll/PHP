<?php

//Los arrays son una colección o un conjunto de valores bajo un nombre, a los que se pueden acceder con índices.

$peliculas = ["Batman", "Spiderman", "El señor de los Anillos", "Harry Potter"];

var_dump($peliculas);
var_dump($peliculas[2]); //indica el valor de la posición 2

echo $peliculas[0]; ///saca el valor del índice en la posición 0


//ARRAYS ASOCIATIVOS: Tienen un índice asociado y definido, también se puede obtener con GET y POST

$personas = [
    'nombre' => 'Cristina',
    'apellido' => 'Mll',
    'nickname' => 'CrisMll'
];

var_dump($personas['nombre']);

//Impresión de arrays por pantalla

$cantantes = ['Drake', 'Taylor Swift', 'Olivia Rodrigo'];

echo $cantantes;
/**
 * Si intentas imprimir directamente un array con echo, PHP intentará convertir el array en una cadena. 
 * Sin embargo, la conversión directa de un array a una cadena no está permitida en PHP, 
 * y puede generar un mensaje de error. Los array en php no se pueden imprimir directamente con echo.
 * Se puede usar la función 'implode' que crea una cadena con los elementos de un array. También se usa join que hace lo mismo.
 */

echo '<br/>';
$cadena = join(', ', $cantantes);
echo "Array con join: $cadena";
echo '<br/>';
$cadena = implode(', ', $cantantes);
echo "Array con implode: $cadena";
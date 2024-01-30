<?php


//MULTIDIMENSIONALES:  Tienen varias dimensiones, es decir, tiene varios arrays dentro.

$contactos = array(
    array(
        'nombre' => 'Cristina',
        'email' => 'cristina@gmail.com'
    ),
    array(
        'nombre' => 'Victor',
        'apellidos' => 'Victor@gmail.com'
    ),
    array(
        'nombre' => 'Raquel',
        'apellidos' => 'raquel@gmail.com'
    ),
);

var_dump($contactos);

// Acceder a un elemento, por ejemplo 'Victor', hay que indicar primero el índice del array,
//y luego del índice que queremos dentro del array

echo $contactos[1]['nombre'];

//Recorrer un array multidimensional

foreach ($contactos as $contacto){
    var_dump($contacto['nombre']);

}

//Si quiero obtener también el índice del array además del valor del elemento se usa $key

foreach ($contactos as $key => $contacto){
    echo nl2br("Índice: $key, Nombre: " . $contacto['nombre'] . "\n");
}
<?PHP

// ## BUSCAR SI EXISTE NUMERO EN UN ARRAY Y MOSTRAR POSICIÓN

$numeros = array(2,3,5,17,20);
$buscar = 3;
$posicion = -1;
$contador = 0;

while($contador < count($numeros) && $posicion == -1){ //en PHP se usa count en lugar de .length
    if($numeros[$contador] == $buscar){
    /* if($numeros[$contador] == $buscar) se traduce en lenguaje natural como "si el elemento en la posición actual
    del array es igual al valor que estamos buscando.  El índice del array empieza en 0, por lo que $numeros[0] representa el primer elemento del array*/
    $posicion = $contador;
    }
    $contador++;
}
if ($posicion == -1){
    echo 'El número no está en el array';
}
else{
    echo "El número se encuentra en la posición $posicion del array";
}



/* OTRA FORMA DE HACERLO

<?php

$numeros = array(2, 3, 5, 17, 20);
$buscar = 17;

$contador = 0;

while ($contador < count($numeros)) {
    if ($numeros[$contador] == $buscar) {
        echo "¡El número $buscar fue encontrado en la posición $contador!";
        break; // Termina el bucle porque ya encontramos el número
    }
    $contador++;
}
*/
?>
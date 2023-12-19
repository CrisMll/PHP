<?PHP

/*Al iniciar con -1, se asegura de que el valor de $posicion no coincida con ningún índice válido del array, 
que comúnmente empieza desde 0 en muchos lenguajes de programación como PHP.
Al ver el valor -1, el código se entenderá rápidamente que es un indicador de que no se encontró el elemento.
Puede considerarse una convención que facilita la comprensión del código.
Evitar ambigüedades: Si se iniciara en 0, sería difícil diferenciar entre el índice 0 y
el caso de "no encontrado", especialmente si el array puede contener elementos que valen 0. 
Iniciar con -1 evita todo esto.*/

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
<?php

/**
 * 
 * EJERCICIO: programa en PHP que tenga Array con 8 números enteros y que haga lo siguiente: 
 * Lo primerotiene que recorrerlo y mostrarlo.
 * Lo segundo tienen que ordenarloy mostrarlo.
 * Lo tercero tiene que mostrar su longitud 
 * Lo último tienen que buscar algo dentro del array, buscar algún elemento.
 * 
 */



//Llenar array con 8 numeros enteros. Elijo hacerlo con un bucle for. También creo función para visualizarlo.
$miArray = [];

for($i = 0 ;$i < 8 ;$i++){
    $numero = rand(0,100);
    array_push($miArray, $numero);
}

var_dump($miArray);

//RECORRER Y MOSTRAR
echo "<h2>Recorriendo array de números manera simple: </h2>";
for($i = 0; $i < count($miArray);$i++){
    echo nl2br("$miArray[$i] \n");
    
}

function verArray(){
    echo "<h2>Mostrando array de números con una función: </h2>";
    global $miArray;
    $cadenaArray = join(', ', $miArray);
    echo nl2br( "El array tiene los siguientes números: $cadenaArray\n");
}

function verArray2($miArray){
    $contador = 0;
    $elementos = array();
    foreach ($miArray as $numero) {
        $contador++;
        if ($contador > 8) {
            break;
        }
        $elementos[] = $numero;
    }
    $cadenaArray = join(', ', $elementos);
    echo nl2br("\nArray con foreach: $cadenaArray\n");
}

verArray();
verArray2($miArray);

//ORDENAR Y MOSTRAR

echo '<h2>Números Ordenados: </h2>';
function ordenarMostrar($miArray){
    sort($miArray);
    for($i = 0; $i < count($miArray);$i++){
        echo nl2br("\nNúmero: $miArray[$i] \n");
    }

}

ordenarMostrar($miArray);

// MOSTRAR LONGITUD


function mostrarLongitud($miArray){
    $longitud = count($miArray);
    echo ("<h2>El array tiene una longitud de $longitud elementos</h2>");
}

mostrarLongitud($miArray);

//BUSCAR ELEMENTO

function buscarElemento($miArray){
    $resultado = array_search(10, $miArray);
    if ($resultado !== false) {
        echo nl2br("\n Elemento encontrado en la posición:  $resultado \n");
    } else {
        echo nl2br("\n Elemento no encontrado en el array\n");
}
}
buscarElemento($miArray);

array_push($miArray,10);
buscarElemento($miArray);
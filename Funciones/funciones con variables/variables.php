<?php

// VARIABLE GLOBAL

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase; //ejecutará el echo sin problemas

function saludoFraseGlobal(){
    global $frase; // Debe definirse la variable como global dentro de la función para poder llamarla, si no, dará error.
    echo "<h1>$frase</h1>";
}

saludoFraseGlobal();



// VARIABLE LOCAL


function saludoFraseLocal(){
    global $frase; // Debe definirse la variable como global dentro de la función para poder llamarla, si no, dará error.
    echo "<h1>$frase , 2 </h1>";

    $year = 2024;
    echo "<h2>$year</h2>"; //Funcionará porque está definida localmente en la función y se hace un echo dentro


}

echo $year; //NO funcionará ya que no está definida, solo está definida dentro del ámbito de la función


saludoFraseLocal();


function saludoFraseLocal2(){
    global $frase; // Debe definirse la variable como global dentro de la función para poder llamarla, si no, dará error.
    echo "<h1>$frase , 3 </h1>";

    $year = 2023;
    echo "<h2>$year</h2>"; //Funcionará porque está definida localmente en la función y se hace un echo dentro

    return $year;

}


echo saludoFraseLocal2(); //se puede llamar a year gracias al return dentro de la funcion, que devuelve el valor de la variable

$saludo2 = saludoFraseLocal2(); // almacena el nombre de la función para llamarla 

echo $saludo2;










?>
<?php

//CONDICIONALES

/*

//IF:

   if (condicion){
      instrucciones;
   }else{
      otras instrucciones;
 }

//SWITCH:
variable
switch(variable/condicion){
caso variable/condicion:
    instrucciones;
    break;
default: //opcional

//OPERADORES DE COMPARACIÓN

== igual (no hace falta que sean mismo tipo de dato en ocasiones)
=== identico (es identico, incluso el tipo)
!= diferente
<> diferente
!== no idéntico
<> menor/mayor
<=,>= menor/mayor o igual que
 */

//Ejemplo if simple
$color = 'verde';

if($color == 'rojo'){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}
echo"</br>";

//Ejemplo con comparadores sencillos
$year = 2024;

if($year != 2024){
    echo 'Es un año diferente al 2024';
}else{
    echo 'Estamos en 2024';
}
echo"</br>";

//Ejemplo para comparar la edad anidando IF
$nombre = 'Maria';
$ciudad = 'Madrid';
$continente = 'Asia';
$edad = 23;
$mayor_edad = 18;

if ($edad >= $mayor_edad){
    echo"$nombre, es mayor de edad";
        if($continente == 'Europa')
            echo " y es de $ciudad.";
        else{
            echo' y no es de Europa.';
        }
}elseif (($edad < 0)||($edad > 120)){
    echo'No es una edad válida';
}else{
    echo"$nombre no es mayor de edad";
}

echo"</br>";



//Ejemplo de comparaciones con SWITCH

$dia = 0;

switch($dia) {
    case $dia >= 1 && $dia <= 5:
        if($dia == 0){ //php evalúa false como 0, por lo tanto al comparar si el $dia=0 coincidiría con el valor y no es lo que buscamos
            echo'Ese día no existe';
        }else{
            echo 'Es día laborable';
        }
        break;
    case 6:
        echo '¡Ánimo que es sábado!';
        break;
    case 7:
        echo '¡Uf, ya es domingo!';
        break;
    default:
        echo 'Ese día no existe';
}
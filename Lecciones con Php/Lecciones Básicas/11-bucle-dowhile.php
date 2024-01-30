<?php
//DO WHILE
//Primero ejecuta al menos una vez las instrucciones y luego evalúa la condición del WHILE

/*
do{
/ /instrucciones
}while(condicion){
    / /instrucciones (opcional)
}
 *
 * */

$edad = 18;
$contador = 1;

do{
    echo nl2br("Tienes acceso a la sala $contador\n");
    $contador++;
}while($edad >= 18 && $contador <= 10);
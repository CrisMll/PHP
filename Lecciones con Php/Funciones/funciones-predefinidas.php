<?php

// #### FUNCIONES PREDEFINIDAS DE PHP MÁS USADAS  ####


//DEBUGGING

//ver el resultado y los datos de una variable
$nombre = 'Cristina';
var_dump($nombre);  


//FECHAS Y HORAS

//Saca la fecha actual en el formato indicado
echo nl2br(date("d-m-y\n"));
//Saca el Time Stamp en formato Unix
echo time(); 


// MATEMÁTICAS

// Muestra la raíz cuadrada de 10 
echo nl2br("\nRaíz cuadrada de 10 es: " . sqrt(10) . "\n");

// Muestra un número aleatorio en el rango predeterminado del sistema. 
echo nl2br("Número aleatorio: " . rand() . "\n");

// Muestra un número aleatorio en un rango específico (entre 0 y 10)
echo nl2br("Número aleatorio entre 0 y 10: " . rand(0, 10) . "\n");

//Número pi
echo nl2br("Número pi: " .pi(). "\n");

//Redondear (al alza)
echo nl2br("Redondeo con dos decimales de 7.98763678 es : " .round(7.98763678, 2). "\n");


// ###### OTRAS FUNCIONES ######

//Comprobar el tipo
echo gettype($nombre);

//Limpiar espacios en blanco con trim
$fraseConEspacios = '       cristina       ';
var_dump($fraseConEspacios);
$fraseConEspacios = trim($fraseConEspacios);
var_dump($fraseConEspacios);


//Comprobar si la variable tiene contenido
function comprobarVariable(){
$texto = 'hola';
if(empty($texto)){
    return "La variable está vacía";
}else{
    return "La variable tiene contenido";
}
}
echo comprobarVariable();


//Contar caracteres de un String
$cadena = "123456";
echo nl2br("\n".strlen($cadena));

//Encontrar caracter
$frase = "La vida es bella";
echo nl2br("\n".strpos($frase,"v"));

//Reemplazar cadenas
echo nl2br("\n$frase");
$frase = str_replace("vida","casa",$frase);
echo nl2br("\n$frase");











/*
Eliminar variables o índices con unset

$year = 2024;
var_dump($year);
unset($year);
var_dump($year);//Dará error, está eliminada

*/

/*
is_ tiene muchas opciones para comprobar variables

if(is_nan($nombre)){
    / /bloque instrucciones;
}
if(isset($nombre)){//comprueba si existe
    / /bloque instrucciones;
}*/
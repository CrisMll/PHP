<?php
//ARITMÉTICOS

$num1 = 55;
$num2 = 33;

echo 'Suma: '.($num1+$num2).'</br>';
echo 'Resta: '.($num1-$num2).'</br>';
echo 'Multiplicación: '.($num1*$num2).'</br>';
echo 'Division: '.($num1/$num2).'</br>';
echo 'Resto: '.($num1%$num2).'</br>';

//OPERADORES DE INCREMENTO Y DECREMENTO

/*
 * $year=2023;
 *
 * INCREMENTO ++ , suma uno
 * $year++; Es igual a year + 1
 *
 * DECREMENTO -- , igual que incremento pero resta
 * $year--; Es igual a year - 1
 *
 * PREINCREMENTO ++$year
 * ++$year; Es igual a 1 - year
 *
 * PREDECREMENTO  --$year
 * --year; Es igual a 1 - year
 */
$edad = 55;
echo $edad; // Imprime 55

$edad++;
echo $edad; // Imprime 56

echo $edad--; // Imprime 56, pero después de esta línea, $edad se decrementa en 1
echo $edad; // Imprime 55, porque $edad se decrementó después de la línea anterior

$edad++;
echo $edad; // Imprime 56

echo --$edad; // Decrementa $edad en 1 antes de imprimir, por lo que imprime 55
echo $edad; // Imprime 55, porque $edad se decrementó en la línea anterior


//ASIGNACIÓN

$edad = 55;
echo $edad.'</br>';
echo $edad+=5; //suma 5 a la variable y guarda el resultado en la variable
echo $edad-=5; //lo mismo que en la anterior pero restando. Al igual con multiplicación y división

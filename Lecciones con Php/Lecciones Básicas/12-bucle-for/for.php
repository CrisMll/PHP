<?php
/*
 * BUCLE FOR // Este suele usarse cuando queremos iterar un número determinado de veces.

    Estructura:

    for(variable contador, condicion, incremento contador){
        instrucciones
    }

    / /la variable de contador se evalúa una vez al inicio, después se evalúa la condición
    cada vez que se itera hasta que sea falsa, y al final de cada iteración se ejecuta el incremento/decremento de contador(se actualiza)
*/

//VER TODOS LOS NUMEROS DEL 1 AL 100 Y LOS MUESTRE
echo '<h2>Contador de números del uno al 100</h2>';
for($numero = 0;$numero <= 100;$numero++){
    if($numero == 100){
        echo "$numero.";
    }else {
        echo "$numero, ";
    }
}
//Esto también puede simplificarse con este código:
echo nl2br("\nOtro método más reducido: \n");

for ($numero = 0; $numero <= 100; $numero++) {
    echo ($numero == 100) ? "$numero." : "$numero, ";
}

//SUMAR TODOS LOS NUMEROS DEL 1 AL 100

echo nl2br("\n");

echo '<h2>Suma de todos los números del uno al 100</h2>';
$resultado = 0;

for($numero=0;$numero<=100;$numero++){
    $resultado += $numero;
}
echo"<p>El resultado de la suma es: $resultado </p>";
<?php
/*
/ /WHILE
/ /Ejecuta e itera las instrucciones mientras se cumpla la condición.
Evalúa la condición y si se cumple ejecuta las instrucciones hasta que algo le haga salir.
*
*while(condición){
instrucciones;
}
*TENER CUIDADO DEL BUCLE INFINITO Y SIEMPRE PROBAR UNA SALIDA.
*/

//Ejemplo while con cuenta atrás:

$cuenta_atras = 10;
echo '<h1>Comienza la cuenta atrás: </h1>';
while($cuenta_atras <= 10){
echo"<p>$cuenta_atras</p>";
--$cuenta_atras;
if ($cuenta_atras == 0){
echo'¡Cero!';
break;
}
}
echo nl2br("\n¡Despegamos!");
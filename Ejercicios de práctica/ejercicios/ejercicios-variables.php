<<<<<<< HEAD
<?php
/*

## VARIABLES ##

Crear dos variables, "país" y "continente", mostrarlas por pantalla
e imprimir el tipo de cada una.

*/

$pais = "España";
$continente = "Europa";

echo nl2br("El país es $pais y el continente es $continente \n");
echo "El tipo de dato de $pais es: ", gettype($pais),"<br/>";
echo "El tipo de dato de $continente es: ", gettype($continente);



/*
Escribe un scripts que muestre por pantalla los numeros pares del 1 al 100
*/

echo '<h1>Numeros pares del 1 al 100</h1>';

for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0){
        echo "$i<br/>";
    }/*else{
        echo  nl2br("\n El número es impar \n");
    }*/
}





=======
<?php
/*

## VARIABLES ##

Crear dos variables, "país" y "continente", mostrarlas por pantalla
e imprimir el tipo de cada una.

*/

$pais = "España";
$continente = "Europa";

echo nl2br("El país es $pais y el continente es $continente \n");
echo "El tipo de dato de $pais es: ", gettype($pais),"<br/>";
echo "El tipo de dato de $continente es: ", gettype($continente);



/*
Escribe un scripts que muestre por pantalla los numeros pares del 1 al 100
*/

echo '<h1>Numeros pares del 1 al 100</h1>';

for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0){
        echo "$i<br/>";
    }/*else{
        echo  nl2br("\n El número es impar \n");
    }*/
}





>>>>>>> a791fe10d1b007199bbf9369bca2c4dde9aa5de0
?>
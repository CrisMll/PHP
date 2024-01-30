<?php

//FUNCIONES COMUNES CON ARRAYS

$personas = ['María', 'Raquel', 'Lidia', 'David'];
$frutas = array('manzana' => 4, 'naranja' => 2, 'plátano' => 8, 'uva' => 1, 'kiwi' => 6);
$numeros = [2,87,1,35,6,23,77];


//ORDEN ASCENDENTE
/**
 *  sort se utiliza para ordenar arrays numéricos de forma ascendente, 
 * mientras que asort se utiliza para ordenar arrays asociativos
 *  de forma ascendente manteniendo las asociaciones clave-valor. 
 * Ambas funciones modifican el array original.
 */

//SORT
sort($numeros);
echo nl2br("Números ordenados: \n");
echo implode(', ',$numeros);

//SORT descencente
arsort($numeros);
echo nl2br("\n Números ordenados a la inversa: ");
echo implode(', ',$numeros);

//ASORT
asort($frutas);
echo nl2br("\n Frutas y sus índices: ");
print_r($frutas);
echo '<br/>';
echo implode(', ',$frutas);

//Para ordenar string es preferible usar asort ya que sort lo ordena como si fueran índices numéricos y a veces
//no nos dará el resultado esperado.

echo nl2br("\n Personas sin orden: ");
echo implode(', ',$personas);
asort($personas);
echo nl2br("\n Personas ordenadas: ");
echo implode(', ',$personas);


//AÑADIR ELEMENTOS

//Se puede añadir simplemente indicando corchetes vacíos e incluyendo el nuevo elemento, y lo coloca el último
//Es más recomendable usar array_push() 
echo '<br/>';
$personas [] = 'Cristina';//añade Cristina
echo '<br/>';
array_push($personas, 'Paco');//añade Paco
echo implode(', ',$personas);

//Usando .pop se elimina la última poscición y si quiero eliminar algún elemento concreto unset[indice]
echo '<br/>';
array_pop($personas);//Elimina a Paco
unset($personas[2]);//Elimina a Lidia
echo implode(', ',$personas);


//OTRAS FUNCIONES

/**
 * 
 * array_rand : Saca un elemento aleatorio
 * array_reverse: Saca el array a la inversa
 * array_search: Busca un elemento coincidente e indica el índice
 * count : saca la longitud y cuenta los elementos de un array. 
 * 
 */
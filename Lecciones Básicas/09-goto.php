<?php

/*
//OPERADOR GOTO
Se define una marca en el código y cuando se utiliza goto + nombre de la marca, salta a esa instrucción.

codigo;
goto marca;
codigo;
marca:
echo'se ha saltado el codigo hasta esta marca';
*/

//Ejemplo con GOTO


echo "<h2>Uno</h2>";
echo "<h2>Dos</h2>";
echo "<h2>Tres</h2>";
goto marca;
echo "<h2>Cuatro</h2>";
echo "<h2>Cinco</h2>";
echo "<h2>Seis</h2>";
marca:
echo "<h2>Hemos saltado al siete</h2>";
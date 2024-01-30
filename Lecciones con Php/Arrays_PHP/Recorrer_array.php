<?php


//Para poder recorrerlo de manera sencilla se utilizan bucles for


//FOR NORMAL
$peliculas = ["Batman", "Spiderman", "El señor de los Anillos", "Harry Potter"];
echo "<h1> Listado de películas con bucle for</h1>";
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++){ //el count llega hasta la última posición y si es la misma dará error
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";


//FOR EACH : Se utiliza sobre todo precisamente para recorrer arrays
echo "<h1> Listado de películas con foreach</h1>";
echo "<ul>";
foreach ($peliculas as $pelicula){
    echo "<li>".$pelicula."</li>";
}
echo "</ul>";

//Se traduciría como, recorre la longitud del array X y crea un índice en cada iteración en esta variable Y
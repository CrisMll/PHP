<?php
require_once 'claseJugador.php';
require_once 'claseEquipo.php';

echo "<h1> Datos de los jugadores del equipo de Baloncesto </h1>";

$equipo = new Equipo();

//bucle for que crea 9 jugadores con un dorsal y unos puntos aleatorios
for ($i = 1; $i <= 9; $i++) { 
    $numeroDorsal = $i;
    $jugador = new Jugador($numeroDorsal);
    $puntosAleatorios = rand(20, 100);
    $jugador->addPtos($puntosAleatorios);
    $equipo->addJug($jugador);
}

$equipo->getTotal();

//pruebo las funciones creando un jugador nuevo de manera manual y no con el bucle
$jugadorNuevo = new Jugador((10));
$jugadorNuevo->addPtos(rand(20,100));
$equipo->addJug($jugadorNuevo);
$equipo->getTotal();


/**
 * 2.	La clase Jugador creará un jugador de Baloncesto donde:
 * a.	numeroJug, mantiene el número de dorsal
 * b.	ptos, mantiene el número de ptos
 * c.	el método addPtos, añade los puntos que se pasen por entrada como argumento a la propiedad ptos siempre y cuando sean mayor a 0.
 * 
 * 3.	La clase Equipo mantiene un array de jugadores de tipo Jugador. Para ello:
 * 
 * a.	El método addJug añade el Jugador pasado por entrada al array
 * b.	El método getTotal recorre todo el array y devuelve la puntuación total de todos los jugadores
 * Para la comprobación y buen funcionamiento de las dos clases se creará un tercer fichero denominado temporada.php. En este fichero:
 * •	Se crearán 9 jugadores mediante un bucle fo
 * •	El numero de dorsal de cada jugador será consecutiv
 * •	La puntuación de cada jugador será aleatoria entre 20 y 100 pto
 * •	Se añadirá cada jugador al equipo
 * •	Al final del fichero se utilizará el método getTotal para mostrar el total de puntuación de todos los jugadores añadidos al equipo
 */



?>
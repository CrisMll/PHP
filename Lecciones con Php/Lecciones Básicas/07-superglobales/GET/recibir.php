<?php

echo "<h1>".$_GET['nombre']."</h1>"; //recibiríamos 'nombre' y mostramos
echo "<h1>".$_GET['apellidos']."</h1>"; //los apellidos
echo "<h1>".$_GET['telefono']."</h1>"; //el telefono

var_dump($_GET); //muestra los valores recibidos por get
?>
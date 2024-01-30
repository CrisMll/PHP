<?php

echo "<h1>".$_POST['nombre']."</h1>"; //recibiríamos 'nombre' y mostramos
echo "<h1>".$_POST['apellidos']."</h1>"; //los apellidos
echo "<h1>".$_POST['telefono']."</h1>"; //el telefono

var_dump($_POST); //muestra los valores recibidos por POST
?>
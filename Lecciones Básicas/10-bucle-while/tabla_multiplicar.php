<?php

//Ejemplo While tabla multiplicar

if (isset($_POST['numero'])){ //la funcion isset comprueba si hay un valor en la variable
    $numero = (int)$_POST['numero'];
}else{
    $numero = 0;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";
$contador = 0;
while ($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

echo "<br/>";
echo "<button type='button'><a href=formulario_while.html>Volver</a></button>";
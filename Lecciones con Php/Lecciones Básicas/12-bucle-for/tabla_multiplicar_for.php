<?php

if (isset($_POST['numero'])){ //la funcion isset comprueba si hay un valor en la variable
    $numero = (int)$_POST['numero'];
}else{
    $numero = 0;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

for ($contador=0;$contador <= 10;$contador++){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}
echo nl2br("\n");
echo "<button type='button'><a href=formulario.html>Volver</a></button>";
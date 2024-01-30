<?php


function buenosDias(){
    return "<h2>Buenos días</h2>";
}
function buenasTardes(){
    return "<h2>Buenas tardes</h2>";
}
function buenasNoches(){
    return "<h2>Buenos noches</h2>";
}

$horario = "buenosDias";
echo $horario(); //llama a la función cuyo nombre está contenido en la variable

$horario = buenosDias();
echo $horario; //asigna valor de la función a la variable previamente

/**
 * Si planeas reutilizar el resultado de la función en varios lugares del código, 
 * puede ser más eficiente almacenar el resultado en una variable $horario = buenosDias();
 * en lugar de llamar a la función repetidamente.
 * 
 * 
 * Si el nombre de la función (en este caso, "buenosDias") es dinámico y puede cambiar durante la ejecución del programa,
 * entonces puede ser más apropiado utilizar la primera opción ($horario = "buenosDias"; echo $horario();
 * ya que el nombre de la función está contenido en una variable.
 */
<?php
/*
 * Recoger dos números de un formulario html y mostrar todos los numeros entre ellos por pantalla
 * */

if(isset($_POST['num1'])&&isset($_POST['num2'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    if ($num2 >= $num1){
        echo'Los números entre ambos son: ';
        for ($i = $num1; $i <= $num2; $i++){
            echo ($i == $num2) ? "$i." : "$i, ";
        }
    }else{
        echo 'El segundo número debe ser mayor que el primero';
    }
}
echo '<form action="ejercicio5.html" method="post">';
echo '<button type="submit">Volver al formulario</button>';
echo '</form>';


?>

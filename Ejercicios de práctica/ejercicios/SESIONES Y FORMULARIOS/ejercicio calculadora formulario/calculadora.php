<?php

$resultado = 0;

function suma(){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $resultado = $num1 + $num2;
    return "El resultado de la operación es $resultado";
    
}
function resta(){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $resultado = $num1 - $num2;
    return "El resultado de la operación es $resultado";
    
}
function multiplicar(){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $resultado = $num1 * $num2;
    return "El resultado de la operación es $resultado";
    
}
function dividir(){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $resultado = $num1 / $num2;
    return "El resultado de la operación es $resultado";
}

if(isset($_POST['suma'])){
    echo suma();
}elseif(isset($_POST['resta'])){
    echo resta();
}elseif(isset($_POST['multiplicar'])){
    echo multiplicar();
}else{
    echo dividir();
}

echo nl2br("\n<button><a href='calculadora.html'> Volver </a></button>");
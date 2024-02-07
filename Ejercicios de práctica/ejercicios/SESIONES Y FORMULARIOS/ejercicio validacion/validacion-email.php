<?php

/**
 * 
 * 1. Una función
 * 2. Validar email con filter_var
 * 3. Recoger variable por get y validarla
 * 4. Mostrar resultado
 * 
 */



function validacionEmail(){
    $email = $_GET['email'];
    $estado = 'no valido';
    if(isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $estado = 'Válido';
        }
    return "El estado es: $estado y el email es $email";
}

if(isset($_GET['email'])){
    echo validacionEmail();
}else{
    echo 'Pasa un email por el formulario';
}




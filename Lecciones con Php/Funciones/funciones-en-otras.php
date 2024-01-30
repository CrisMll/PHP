<?php

function getNombre($nombre){
    $usuario = "Mi nombre es: $nombre";
    return $usuario;
}

function getApellido($apellidos){
    $usuario = $apellidos;
    return $usuario;
}

function nombreUsuario($nombre, $apellidos){
    $usuario = getNombre($nombre) . ' ' . getApellido($apellidos);
    return $usuario;
}

echo nombreUsuario('Cristina', 'Martinez');

?>
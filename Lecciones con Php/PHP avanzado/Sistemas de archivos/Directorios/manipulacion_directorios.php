<?php

/**
 * ### CREACION DE DIRECTORIOS ###
 * Función is_dir('mi_carpeta'): Esta función verifica si el directorio llamado 'mi_carpeta' ya existe. 
 * Retorna true si existe y es un directorio, o false si no existe o no es un directorio.
 * 
 * Función mkdir('mi_carpeta', 0777): Si el directorio no existe, esta función lo crea con
 *  el nombre 'mi_carpeta' y le asigna los permisos 0777 (lectura, escritura y ejecución para todos los usuarios).
 * 
 * La expresión or die('No se puede crear la carpeta') se utiliza para manejar un error si la creación del directorio falla,
 * mostrando un mensaje y terminando la ejecución del script.
 * 
 */

if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta',0777)or die('No se puede crear la carpeta');
}else{
    echo 'No se puede crear, ya existe la carpeta';
}




//ABRIR ARCHIVOS DENTRO DE LA CARPETA
/**
 * Abrir Archivos Dentro de la Carpeta:
 * 
 * Función opendir('./mi_carpeta'): Abre el directorio 'mi_carpeta' y devuelve un identificador de gestor de directorio,
 * utilizado en la función readdir posteriormente.
 * 
 * Estructura while(false !== ($archivo = readdir($gestor))): Itera sobre los archivos dentro del directorio.
 * 
 * readdir lee el siguiente archivo en el directorio y retorna su nombre. 
 * El bucle se ejecuta mientras haya archivos que leer.
 * 
 * La condición if($archivo != '.' && $archivo != '..') evita que se muestren en pantalla los directorios de
 * referencia '.' (directorio actual) y '..' (directorio padre).Se imprime el nombre de cada archivo con echo $archivo.'<br/>';.
 * 
 */

echo '<h3>Archivos dentro de la carpeta: </h3>';
if($gestor = opendir('./mi_carpeta')){ //
    while(false !== ($archivo = readdir(($gestor)))){
        if($archivo != '.' && $archivo != '..'){ //para que no salgan por pantalla los . y .. de la ruta
        echo $archivo.'<br/>';
        }
    }
}

/*
/ /BORRAR DIRECTORIO
rmdir('Carpeta_Nueva');
*/
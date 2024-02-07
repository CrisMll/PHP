<?php

//PODEMOS REALIZAR VARIAS ACCIONES CON LOS ARCHIVOS EN PHP



//ABRIR ARCHIVO
$archivo = fopen("fichero.txt","r");
//LEER ARCHIVO
$contenido = fgets($archivo);
echo $contenido;

//de la manera anterior solo mostraría la primera línea, hay que incluirlo en un bucle para que lea todo
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido;
}

//CERRAR ARCHIVO
fclose($archivo);

//COMPROBAR SI EXISTE UN ARCHIVO

if(file_exists('fichero.txt')){
    echo "<br/> El fichero existe";
}else{
    echo "<br/> El fichero no existe";
}
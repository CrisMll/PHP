<?php
//PROCESAR LA INFORMACION QUE LLEGA DESDE EL FORMULARIO

$archivo = $_FILES['archivo']; //Obtiene la información del archivo que fue enviado mediante un formulario HTML. La superglobal $_FILES (array asociativo) se utiliza para manejar archivos subidos.
$nombre = $archivo['name'];
var_dump($nombre); //accedemos al índice 'name' de $_FILES para guardarlo en una variable. Igual con type.
$tipo = $archivo['type'];
var_dump($tipo);



if ($tipo == "image/jpeg" || $tipo == "image/jpg" || $tipo == "image/png" || $tipo == "image/gif" || $tipo == "image/ico") {
    // Guardar la imagen en un directorio de nuestro servidor
    mkdir("imagenes", 0777); 
    move_uploaded_file($archivo['tmp_name'], 'imagenes/'.$nombre);//tmp_name es realmente el nombre del archivo en la subida, es necesario acceder a él para poder subir la imagenes
    header("Refresh: 10; URL=index.php"); //refresca la página y redirecciona pasados 5 seg
    echo "<h3>Imagen subida con éxito</h3>";
}
/*
}else{
    header("Refresh: 10; URL=index.php"); 
    echo "<h3>Formato de imagen no soportado</h3>";
}


/*** /CONFIG WAMP64 PARA SUBIDAS DE ARCHIVOS
En configuración se puden cambiar los parámetros de upload_max_size y post_max_size para aumentar el tamaño de las subidas
Y date_zone para que php indique bien las fechas y horas de los archivos.*/

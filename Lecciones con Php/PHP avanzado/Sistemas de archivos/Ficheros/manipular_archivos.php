
<?php


//COPIAR FICHERO
copy('fichero.txt','fichero_copia.txt')or die('Error al copiar');

//RENOMBRAR FICHERO
rename('fichero_copia.txt','fichero_copiado.doc');

//ELIMINAR FICHERO
unlink('fichero_copiado.doc')or die('Error al borrar');
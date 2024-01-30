<?php

//Se utiliza para ahorrar y reutilizar el código
//Nos permite incorporar codigo de otros ficheros y reutilizar un fichero php en otros llamando al include, sin repetir código

//EJEMPLO CON LA CABECERA y FOOTER DE UN HTML

?>

<?php
include 'contenido-includes/cabecera.php';
?>
        <main>
            <hr/>
            <section>
                <h2>Esta es la página de inicio</h2>
                <p>Texto de prueba de la página de inicio.</p>
            </section>
        </main>
        <hr/>

<?php
include 'contenido-includes/footer.php';
?>
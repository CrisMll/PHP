<?php

//VARIABLES SUPERGLOBALES

//Variables de servidor más usadas
echo '<h2>';
echo $_SERVER['SERVER_ADDR'].'</br>';//saca la IP del servidor
echo $_SERVER['SERVER_NAME'].'</br>';//saca el dominio
echo $_SERVER['SERVER_SOFTWARE'].'</br>';//saca la info del software del servidor
echo $_SERVER['HTTP_USER_AGENT'].'</br>';//saca el navegador web del cliente
echo $_SERVER['REMOTE_ADDR'].'</br>';//saca la IP del cliente
echo '</h2>';
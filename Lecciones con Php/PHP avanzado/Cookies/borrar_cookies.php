<?php

if(isset($_COOKIE['micookie'])) {
    unset($_COOKIE['micookie']);//no solo habría que borrarla porque se mantendría guardada, hay que caducarla
    setcookie('micookie','',time()-100);//se le indica valor vacío y un -100 en time para caducarla
}

header('Location:ver_cookies.php'); //redirecciona a la página

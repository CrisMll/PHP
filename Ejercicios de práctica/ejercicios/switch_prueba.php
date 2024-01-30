<?PHP 

$nota = 7;

switch($nota){
    case(($nota<=3) && ($nota>=0)):
        echo 'Has suspendido';
        break;
    case 4:
        echo 'Has suspendido por poco, ¡ánimo!';
        break;
    case 5:
        echo 'Has aprobado por poco,¡esfuérzate';
        break;
    case(($nota>5) && ($nota<8)):
        echo 'Has aprobado!';
        break;
    case 8:
        echo 'Has sacado un notable, ánimo!';
        break;
    case 9:
        echo '¡Sobresaliente!';
        break;
    case 10:
        echo '¡De 10!';
        break;

}
?>
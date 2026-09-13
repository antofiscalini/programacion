<?php
$ejercicio=2;
if($ejercicio==1):

$fruta="banana";
switch($fruta){
    case "banana":
        echo "Eres una banana";
        break;
    case "manzana":
        echo "Eres una manzana";
        break;
    default:
        echo "No eres ni banana ni manzana";
};
elseif($ejercicio==2):

$dia=1;
switch($dia){
    case 1:
        echo "Es lunes";
        break;
    case 2:
        echo "Es martes";
        break;
    case 3:
        echo "Es miércoles";
        break;
    case 4:
        echo "Es jueves";
        break;
    case 5:
        echo "Es viernes";
        break;
    case 6:
        echo "Es sábado";
        break;
    case 7:
        echo "Es domingo";
        break;
    default:
        echo "No es un valor valido";
};

else:
echo "No es un ejercicio valido";
endif;
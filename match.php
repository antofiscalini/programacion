<?php

$ejercicio=2;

if($ejercicio==1):

$quiero=7;

$sudamericana=3;
$copa_arg=4;
$libertadores=7;

$resultado=match($quiero){
    $sudamericana => "No quiero la sudamericana",
    $copa_arg => "No quiero la copa argentina",
    $libertadores=> "Quiero la libertadoresss",
    default => "error, valor incorrecto",
};

echo $resultado;

elseif($ejercicio==2):

$edad=55;

$resultado=match(true){
    $edad>=60 => "Eres de la tercera edad",
    $edad>=30 => "Eres es adulto/a",
    $edad>=18=> "Eres adulto/a joven",
    $edad>=0=> "Eres un niño/a",
    default => "error, edad incorrecto",
};

echo $resultado;

else:
    echo "error, ejercicio incorrecto";
endif;
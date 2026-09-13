<?php

$fecha1="2009/09/30";
$fecha2="2010-06-02";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode("/", $fecha1);

echo "$array_fecha[1] <br>";

$array_fecha=explode("-", $fecha2);

echo "$array_fecha[0] <br>";

$array_numeros=explode(" ", $numeros);

echo "$array_numeros[3] <br>";

$array_numeros=explode(" ", $numeros,3);

echo "$array_numeros[2] <br>";
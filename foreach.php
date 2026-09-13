<?php

$laptop=["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

$frutas=[
    "Manzanas"=>50,
    "Peras"=>20,
    "Frutillas"=>100,
    "Durazos"=>75,
];

foreach($laptop as $valor){
    echo $valor. "<br>";
}

echo "<br><br><br>";

foreach($frutas as $clave => $valor){
    echo "Hay " . $valor . " " . $clave . " en el inventario." . "<br>";
}
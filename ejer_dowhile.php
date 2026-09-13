<?php

echo"Ej. 1 <br><br>";

$numero_de_pedidos=15;
$c=1;
echo"Se esta preparando el pedido: <br>";
do{
    echo "número ",$c,"<br>";
    $c++;
}
while($c<=$numero_de_pedidos);

echo"<br>---------------------------------------------------------------<br><br>Ej. 2 <br><br>";

$numero_de_niveles=10;
$c=1;

do{
    echo "Ha superado el nivel:  ",$c,"<br>";
    $c++;
}
while($c<=$numero_de_niveles);

echo"<br>---------------------------------------------------------------<br><br>Ej. 3 <br><br>";

$numero_de_asientos=1;
$c=20;

do{
    echo "Asientos disponibles: ",$c,"<br>";
    $c--;
}
while($c>=$numero_de_asientos);

echo"<br>---------------------------------------------------------------<br><br>Ej. 4 <br><br>";

$cuenta_regresiva=1;
$c=10;

do{
    echo $c,"<br>";
    $c--;
}
while($c>=$cuenta_regresiva);

echo"<br>---------------------------------------------------------------<br><br>Ej. 5 <br><br>";

$num_pizzas=8;
$c=2;
$valor_pizzas=8000;

echo "1 pizza: $",$valor_pizzas ,"<br>";
do{
    echo $c," pizzas: $",$c*$valor_pizzas ,"<br>";
    $c++;
}
while($c<=$num_pizzas);

echo"<br>---------------------------------------------------------------<br><br>Ej. 6 <br><br>";

$kilos=15;
$c=2;
$repeticiones=12;

echo "1 repetición: ",$kilos ,"kg", "<br>";
do{
    echo $c," repeticiones = ",$c*$kilos ," kg", "<br>";
    $c++;
}
while($c<=$repeticiones);

echo"<br>---------------------------------------------------------------<br><br>Ej. 7 <br><br>";

$valor=2500;
$c=12;
$cajas=2;

do{
    echo $c," cajas = $",$c*$valor ,"<br>";
    $c--;
}
while($c>=$cajas);
echo "1 caja = $",$valor , "<br>";

echo"<br>---------------------------------------------------------------<br><br>Ej. 8 <br><br>";

$valor=12000;
$c=20;
$entrada=2;

do{
    echo $c," entradas = $",$c*$valor ,"<br>";
    $c--;
}
while($c>=$entrada);
echo "1 entrada = $",$valor , "<br>";

echo"<br>---------------------------------------------------------------<br><br>Ej. 9 <br><br>";

$valor=3500;
$c=2;
$total=10;

echo "Pedido 1 = $",$valor , "<br>";
do{
    echo "Pedido ",$c ," = $",$valor += 3500 ,"<br>";
    $c++;
}
while($c<=$total);
echo"<br>Promoción finalizada";
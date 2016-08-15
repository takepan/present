<?php
$dow = date("w");

$products = array("candy" => 20, "book" => 50);
$discount = array(10, 20, 5, 35, 15, 25, 50);

array_map(function ($k, $v) use ($dow, $discount) {
    printf("%s $%d as usual, today dropped %d percent, $%F now \n", $k, $v, $discount[$dow], $v - ($v * $discount[$dow]) / 100 );
}, array_keys($products), array_values($products) );



<?php

// define('DEBUG', true);
define('DEBUG', false);

$target = "a";

fscanf(STDIN, "%d %d %d %d", $a[0]['price'], $a[1]['price'], $a[2]['price'], $a[3]['price']);
fscanf(STDIN, "%d", $N);

$N *= 4;

$a[0]['quant'] = 1;
$a[1]['quant'] = 2;
$a[2]['quant'] = 4;
$a[3]['quant'] = 8;

$a[0]['tanka'] = $a[0]['price'];
$a[1]['tanka'] = $a[1]['price'] / 2;
$a[2]['tanka'] = $a[2]['price'] / 4;
$a[3]['tanka'] = $a[3]['price'] / 8;

for ($i = 5; $i < 16; $i++) {
    $x = decbin($i);
    $x = str_repeat("0", 4 - strlen($x)) . $x;
    // echo $x . PHP_EOL;

    $arr = array();
    $x_str = str_split($x);
    for ($j = 0; $j < 4; $j++) {
        if ($x_str[$j] == "1") {
            $arr['price'] += $a[$j]['price'];
            $arr['quant'] += $a[$j]['quant'];
        }
    }
    $arr['tanka'] = $arr['price'] / $arr['quant'];
    $a[] = $arr;
}

function cmp($a, $b)
{
    return ($a["tanka"] > $b["tanka"]);
}

usort($a, "cmp");

// var_dump($a);
// exit;

$ans = 0;

foreach ($a as $k => $v) {
    $buy = floor($N / $v['quant']);
    $money = $buy * $v['price'];
    $N -= $buy * $v['quant'];
    $ans += $money;
}

printf("%d\n", $ans);
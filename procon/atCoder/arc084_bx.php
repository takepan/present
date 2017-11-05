<?php

fscanf(STDIN, "%d", $K);

$FR = $K ?? 1;
$SZ = $K ?? 100000;

// echo $FR , " " , $SZ , PHP_EOL;
// exit;

define('FR', $FR);
define('SZ', $SZ);

$arr = array_pad(array(), $SZ + 1, PHP_INT_MAX);
for ($i = $FR; $i <= $SZ; $i++) {
    for ($j = 1; $j <= 100000; $j++) {
        $x = $i * $j;
        $strX = strval($x);
        $num = array_sum(str_split($strX));
        $arr[$i] = min($arr[$i], $num);
        $arr[$j] = min($arr[$j], $num);
    }
}
// var_dump($arr);
// echo $arr[6];
// echo $arr[41];
echo $arr[$K];

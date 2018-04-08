<?php

$st = microtime(true);

fscanf(STDIN, "%d", $KK);

$ans = PHP_INT_MAX;

for ($i = 0; $i < 1000; $i++) {
    for ($j = 1; $j < 10000; $j++) {
        $k = $i * 10000 + $j;
        $ans = min($ans, array_sum(str_split(strval($KK * $k))));
    }
    $en = microtime(true);
    if ($en - $st > 1.8) {
        echo $ans . PHP_EOL;
        exit;
    }
}
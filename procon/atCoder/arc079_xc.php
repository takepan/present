<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$ans = 0;

while(true) {
    $mmax = max($a);
    if ($mmax < $N) break;

    $locmax = array_search($mmax, $a);
    $kaisuu = ceil(($mmax - $N + 1) / $N);
    $ans += $kaisuu;

    $a[$locmax] -= ($N + 1) * $kaisuu;
    for ($i = 0; $i < $N; $i++) {
        $a[$i] += $kaisuu;
    }

    // echo implode(" ", $a) . PHP_EOL;
}

printf("%d\n", $ans);

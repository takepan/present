<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE);

// define('DEBUG', true);
define('DEBUG', false);

define('MOD', pow(10, 9) + 7);

fscanf(STDIN, "%d %d", $N, $M);
if ($N == $M) {
    $ans = 1;
    for ($i = 0; $i < $N; $i++) {
        $ans *= $N - $i;
        $ans %= MOD;
    }
    for ($i = 0; $i < $N; $i++) {
        $ans *= $N - $i;
        $ans %= MOD;
    }
    $ans *= 2;
    $ans %= MOD;
} elseif ($N - 1 == $M || $N + 1 == $M) {
    $ans = 1;
    $mmax = max($N, $M);
    $mmin = min($N, $M);
    for ($i = 0; $i < $mmax; $i++) {
        $ans *= $mmax - $i;
        $ans %= MOD;
    }
    for ($i = 0; $i < $mmin; $i++) {
        $ans *= $mmin - $i;
        $ans %= MOD;
    }
} else {
    echo "0\n";
    exit;
}

echo $ans . PHP_EOL;


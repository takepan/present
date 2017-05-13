<?php

fscanf(STDIN, "%d %d", $N, $M);

define('NMAX', 1000);
define('MMAX', 2000);

$a = array();
$b = array();
$c = array();

for ($i = 0; $i < $M; ++$i) {
    fscanf(STDIN, "%d %d %d", $a[$i], $b[$i], $c[$i]);
    $c[$i] = -$c[$i];
}

$dist = array();

for ($i = 0; $i < $N; ++$i) {
    $dist[$i] = PHP_INT_MAX;
}

$dist[0] = 0;

for ($loop = 0; $loop < $N - 1; ++$loop) {
    for ($i = 0; $i < $M; ++$i) {

        if ($dist[$a[$i] - 1] == PHP_INT_MAX) continue;

        if ($dist[$b[$i] - 1] > $dist[$a[$i] - 1] + $c[$i]) {
            $dist[$b[$i] - 1] = $dist[$a[$i] - 1] + $c[$i];
        }
    }
}

$ans = $dist[$N - 1];

$negative = array();

for ($i = 0; $i < $N; ++$i) {
    $negative[$i] = false;
}

for ($loop = 0; $loop < $N ; ++$loop) {
    for ($i = 0; $i < $M; ++$i) {
        if ($dist[$a[$i] - 1] == PHP_INT_MAX) continue;

        if ($dist[$b[$i] - 1] > $dist[$a[$i] - 1] + $c[$i]) {
            $dist[$b[$i] - 1] = $dist[$a[$i] - 1] + $c[$i];
            $negative[$b[$i] - 1] = true;
        }

        if ($negative[$a[$i] - 1] == true) {
            $negative[$b[$i] - 1] = true;
        }
    }
}

if ($negative[$N - 1]) {
    echo "inf" . PHP_EOL;
} else {
    echo -$ans . PHP_EOL;
}

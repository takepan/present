<?php

fscanf(STDIN, "%d %d %d", $N, $A, $B);

if ($A > $B) {
    echo "0\n";
    exit;
}

if ($N == 1) {
    if ($A != $B) {
        echo "0\n";
        exit;
    }
}

$mmin = $A * ($N - 1) + $B;
$mmax = $A + $B * ($N -1);

echo ($mmax - $mmin + 1) . PHP_EOL;

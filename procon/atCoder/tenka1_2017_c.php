<?php

// define('DEBUG', true);
define('DEBUG', false);

// define('MOD', 1000000007);

fscanf(STDIN, "%d", $N);

for ($h = 1; $h <= 3500; $h++) {
    for ($n = 1; $n <= 3500; $n++) {
        $base = 4 * $h * $n - $N * $n - $N * $h;
        if ($base == 0) continue;
        $w = ($N * $h * $n) / $base;

        if ($w == intval($w) && $w > 0) {
            echo "{$h} {$n} {$w}\n";
            exit;
        }
    }
}

<?php

// define('DEBUG', true);
define('DEBUG', false);

// define('MOD', 1000000007);

fscanf(STDIN, "%d", $N);

$target = 4 / $N;
$start = ceil($N / 4);

for ($i = 1; $i <= 3500; $i++) {
    for ($j = 1; $j <= 3500; $j++) {
        $calc = 1 / $i + 1 / $j;
        if ($calc < $target) {
            $rest = $target - $calc;
            $num3 = 1 / $rest;
            if ($num3 == (int)$num3) {
                echo "{$i} {$j} {$num3}\n";
                exit;
            }
        }
    }
}

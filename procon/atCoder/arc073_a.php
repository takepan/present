<?php

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $N, $TT);
$t = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $N - 1; $i++) {
    if ($t[$i + 1] - $t[$i] < $TT) {
        $ans += $t[$i + 1] - $t[$i];
    } else {
        $ans += $TT;
    }
}
$ans += $TT;

echo $ans . PHP_EOL;

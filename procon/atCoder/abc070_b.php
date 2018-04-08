<?php

// define('DEBUG', true);
define('DEBUG', false);

$m = array_pad(array(), 200, 0);
$ans = 0;

fscanf(STDIN, "%d %d %d %d", $A, $B, $C, $D);

for ($i = $A; $i < $B; $i++) {
    $m[$i] = 1;
}

for ($i = $C; $i < $D; $i++) {
    $ans += $m[$i];
}

echo $ans . PHP_EOL;

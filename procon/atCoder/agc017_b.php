<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d %d %d", $N, $A, $B, $C, $D);
$diff = abs($A - $B);
$N--;

$tMIN = min($C, $D) - max($C, $D);
$tMAX = max($C, $D) - min($C, $D);

if (DEBUG) echo $tMIN . " " . $tMAX . PHP_EOL;
// exit;

for ($i = 0; $i <= $N; $i += 2) {
    // printf ("%d %d\n", $N - $i, $i);

    $a = $N - $i;
    $b = $i;
    $mmin1 = $a * $C;
    $mmax1 = $a * $D;
    $mmin2 = $b * $tMIN / 2;
    $mmax2 = $b * $tMAX / 2;
    $mminALL = $mmin1 + $mmin2;
    $mmaxALL = $mmax1 + $mmax2;

    if (DEBUG) echo $a . " " . $b . " $mminALL -- $mmaxALL | $diff \n";

    if (abs($A - $B) >=  $mminALL && abs($A - $B) <= $mmaxALL) {
        echo "YES\n";
        exit;
    }
 
}

echo "NO\n";

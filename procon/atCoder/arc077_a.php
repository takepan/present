<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $n);
$a = explode(" ", trim(fgets(STDIN)));

$ans = array();

for ($i = 0; $i < $n; $i++) {
    $aa = $n - $i * 2;
    $bb = $i * 2 - $n + 1;
    $cc = max($aa, $bb);
    // echo "{$i} {$cc}\n";
    $ans[$i] = $a[$cc-1];
}

echo implode(" ", $ans) . PHP_EOL;

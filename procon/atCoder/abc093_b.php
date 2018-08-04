<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d", $A, $B, $K);

if ($K > $B - $A + 1) {
    $K = $B - $A + 1;
}

$arr1 = array_fill($A, $K, 1);
$arr2 = array_fill($B - $K + 1, $K, 1);
$arr = $arr1 + $arr2;

echo implode("\n", array_keys($arr)) . "\n";

<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d", $n, $m, $d);

if ($m == 2) {
    $total = $n / 2;
} else {
    $total = $m - 1;
}

if ($d == 0) {
    $score = $total * ( 1 / $n );
} else {
    $tmp = (1 + $n - 1) * ($n - 1) / 2;
    $tmp2 = ($n - $d) / $tmp;
    $score = $total * ( ($n - 1) / $n ) * $tmp2;
}
echo $score . PHP_EOL;
<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

$ans = (($a * 12 + $b ) * 12 + $c ) * 12 + $d;

echo $ans . "\n";

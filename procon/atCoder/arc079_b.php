<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$arr = array();

fscanf(STDIN, "%d %d", $K);

$K = 5;

$a = $K * 2;
$b = 0;

for ($i = 0; $i < $K; $i++) {
    $a -= 2;
    $b += 1;
    
}

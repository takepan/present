<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d", $A, $B, $C);

if ($A == $B) {
    echo $C . PHP_EOL;
} elseif ($A == $C) {
    echo $B . PHP_EOL;
} else {
    echo $A . PHP_EOL;
}

<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $a, $b);

if ($a + $b == 15) {
    echo "+\n";
    exit;
}
if ($a * $b == 15) {
    echo "*\n";
    exit;
}
echo "x\n";

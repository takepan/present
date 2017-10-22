<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $H, $W);
echo str_repeat("#", $W + 2) . PHP_EOL;
for ($i = 0; $i < $H; $i++) {
    fscanf(STDIN, "%s", $s);
    echo "#{$s}#\n";
}
echo str_repeat("#", $W + 2) . PHP_EOL;

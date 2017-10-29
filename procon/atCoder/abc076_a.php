<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$map = array(array());
fscanf(STDIN, "%d", $R);
fscanf(STDIN, "%d", $G);

echo $G * 2 - $R;
echo PHP_EOL;
<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $s);

$num = strlen($s) - 2;
$arr = str_split($s);

echo $arr[0];
echo $num;
echo $arr[count($arr) - 1];
echo PHP_EOL;
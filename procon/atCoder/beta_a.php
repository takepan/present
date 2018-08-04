<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$ret = 0;
$mmax = 0;
for ($i = 0; $i < $N; $i++) {
    if ($mmax < $a[$i]) {
        $ret++;
        $mmax = $a[$i];
    }
}
echo $ret . PHP_EOL;

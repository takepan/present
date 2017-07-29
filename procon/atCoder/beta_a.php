<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

define('MOD', 1000000007);

$t = 0;
$s = "";
while($N > $t) {
    $s .= $a[$t];
    $t++;
    $i = (int)$s;
    while ($i >= MOD) {
        $i %= MOD;
    }
    $s = (string)$i;
}
echo $i . PHP_EOL;
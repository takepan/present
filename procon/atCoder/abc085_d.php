<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$a = $b = array();
$ans = 0;

fscanf(STDIN, "%d %d", $N, $H);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $a[$i], $b[$i]);
}

$aMax = max($a);
rsort($b);

while (true) {
    $curB = array_pop($b);

    if ($curB > $aMax) {
        echo "A";
        $H -= $curB;
        $ans++;
    } else {
        echo "B";
        echo (int)ceil($H / $aMax);
        exit;
    }

    if ($H <= 0) {
        echo $ans . PHP_EOL;
        exit;
    }
}

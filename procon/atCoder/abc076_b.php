<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$map = array(array());
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $K);

$ans = 1;
for ($i = 0; $i < $N; $i++) {
    if ($ans <= $K) {
        // echo "A\n";
        $ans += $ans;
    } else {
        // echo "B\n";
        $ans += $K;
    }    
    // echo $ans . PHP_EOL;
}
echo $ans . PHP_EOL;

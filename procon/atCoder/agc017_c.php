<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $N, $M);
$A = explode(" ", trim(fgets(STDIN)));
$arr = array();
foreach ($A as $v) {
    $arr[$v]++;
}
// var_dump($arr);
for ($i = 0; $i < $M; $i++) {
    // echo "****\n";
    fscanf(STDIN, "%d %d", $X, $Y);
    $arr[$A[$X-1]]--;
    $A[$X-1] = $Y;
    $arr[$Y]++;
    if (DEBUG) var_dump($arr);
    echo calc($arr) . PHP_EOL;
}

function calc($arr) {
    global $N;
    $stock = 0;
    $ret = $N;
    $arr2 = array();

    foreach ($arr as $key => $val) {
        // echo $key . " " . $val . PHP_EOL;
        for ($i = $key; $i > $key - $val; $i--) {
            if ($i > 0 && !isset($arr2[$i])) {
                $arr2[$i] = 1;
                $ret--;
                // echo "{$i} ret={$ret}\n";
            }
        }
    }
    return $ret;
}

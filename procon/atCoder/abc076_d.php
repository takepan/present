<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$tt = explode(" ", trim(fgets(STDIN)));
$vv = explode(" ", trim(fgets(STDIN)));

$cur_t = 0;
$cur_v = 0;
$ans = 0;

$t[0] = $cur_t;
$cur_speed = 0;
$speed = array(0 => 0);

foreach ($tt as $key => $dummy) {
    $cur_t += $tt[$key] * 2;
    $cur_v = $vv[$key];
    $t[] = $cur_t;
    $v[] = $cur_v;
}
$v[] = 0;

foreach ($t as $key => $val) {
    if (DEBUG) echo "key:{$key} t:{$t[$key]} v:{$v[$key]}\n";
}

$seigen = array_pad(array(), $cur_t + 1, PHP_INT_MAX);
// var_dump($seigen);
// exit;

for ($i = 1; $i < count($t); $i++) {
    if (DEBUG) echo "**** {$i} {$t[$i]}\n";
    for ($j = 0; $j <= $t[$i]; $j++) {
        $seigen[$j] = min($seigen[$j], ($t[$i] - $j) * .5 + $v[$i]);
        if (DEBUG) echo "!!! j:{$j} base:{$v[$j]} seigen:{$seigen[$j]}\n";
    }
}
// var_dump($seigen);

for ($i = 0; $i < count($t); $i++) {
    for ($j = $t[$i]; $j <= $t[$i+1]; $j++) {
        $seigen[$j] = min($seigen[$j], $v[$i]);
    }
}
if (DEBUG) var_dump($seigen);

for ($i = 1; $i <= $cur_t; $i++) {
    $cur_speed += .5;
    $cur_speed = min($cur_speed, $seigen[$i]);
    $speed[$i] = $cur_speed;
    if (DEBUG) echo "t:{$i} speed:{$cur_speed}\n";
    $ans += ($speed[$i-1] + $speed[$i]) * .5 / 2;
}
echo $ans . PHP_EOL;

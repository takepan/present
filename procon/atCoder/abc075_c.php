<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $N, $M);

$ans = 0;
$v = array();
$sum = array();

for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    $v[$a][$b] = 1;
    $v[$b][$a] = 1;
}
if (DEBUG) var_dump($v);

$flag = true;
while($flag) {
    $flag = false;
    foreach ($v as $key => $val) {
        if (DEBUG) echo "no.{$key} " . count($val) . PHP_EOL;
        if (count($v[$key]) == 1) {
            $ans++;
            $flag = true;
            foreach ($v[$key] as $no => $one) {
                if (DEBUG) echo "X: no:{$no} one:{$one}\n";
                unset($v[$key][$no]);
                unset($v[$no][$key]);
            }
        } 
    }
    // sleep(1);
}
echo $ans . PHP_EOL;

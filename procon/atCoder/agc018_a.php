<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $N, $K);
$A = explode(" ", trim(fgets(STDIN)));
$base = $A;
$mmax = max($A);

if (in_array($K, $A)) {
    echo "POSSIBLE\n";
    exit;
}
if (DEBUG) {
    rsort($A);
    var_dump($A);
}

$bool = true;

$diff = array();

while($bool) {
    $B = array();
    $bool = false;
    $cnt = count($A);
    for ($i = 0; $i < $cnt - 1; $i++) {
        $d = abs($A[$i+1] - $A[$i]);
        if (DEBUG) echo $d . PHP_EOL;
        $B[] = $d;
        if (!isset($diff[$d])) {
            $diff[$d] = 1;
            $bool = true;
        }
    }
    $B = array_unique($B);
    sort($B);
    $A = $B;
    if (DEBUG) echo "----\n";
}

if (DEBUG) {
    var_dump($diff);
    var_dump($A);
}


foreach ($diff as $key => $val) {
    if (($mmax - $K) / $key > 0 && ($mmax - $K) % $key == 0) {
        echo "POSSIBLE\n";
        exit;
    }
}
echo "IMPOSSIBLE\n";

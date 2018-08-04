<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $N, $P);
$a = explode(" ", trim(fgets(STDIN)));
$odd = 0;
$even = 0;

// echo calcP(10,2);

$ans = 0;

foreach ($a as $k => $v) {
    $a[$k] = $v % 2;
    if ($a[$k] == 1) {
        $odd++;
    } else {
        $even++;
    }
}

// echo "\$P = $P \n";
// echo "\$odd = $odd\n";
// echo "\$even = $even\n";

if ($P == 0) {
    // for ($i = 1; $i <= $even; $i++) {
    //     $ans += calcP($even, $i);
    //     if (DEBUG) echo "E{$i}: " . $ans . PHP_EOL;
    // }
    for ($i = 0; $i <= $even; $i++) {
        for ($j = 0; $j <= $odd; $j += 2) {
            $ans += calcP($even, $i) * calcP($odd, $j);
            if (DEBUG) echo "Even:{$i} Odd:{$j} " . $ans . PHP_EOL;
        }
    }
} else {
    for ($i = 1; $i <= $odd; $i += 2) {
        for ($j = 0; $j <= $even; $j++) {
            $ans += calcP($even, $j) * calcP($odd, $i);
            if (DEBUG) echo "Odd:{$i} Even:{$j} " . $ans . PHP_EOL;
        }
    }
}

echo $ans . PHP_EOL;

function calcP($a, $b) {
    $ret = 1;
    for ($i = 0; $i < $b; $i++) {
        $ret *= $a - $i;
        $ret /= $i + 1;
    }
    // echo "calc:{$ret}\n";
    return $ret;
}
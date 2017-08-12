<?php

// define('DEBUG', true);
define('DEBUG', false);

function gcd($a, $b){
    if (DEBUG) echo "gcd($a, $b)\n";
    if($b == 0) {
        $ret = $a;
    } else {
        $ret = gcd($b, $a % $b);
    }
    if (DEBUG) echo "ret(gcd) = " . $ret . PHP_EOL;
    return $ret;
}

function lcm($a, $b){
    if (DEBUG) echo "lcm($a, $b)\n";
    $g = gcd($a, $b);
    $ret = $a / $g * $b;
    if (DEBUG) echo "ret(lcm) = " . $ret . PHP_EOL;
    return $ret; 
}

fscanf(STDIN, "%d", $N);

for ($i = 0; $i < $N; ++$i) {
    fscanf(STDIN, "%d", $a[$i]);
}

$ans = $a[0];

for ($i = 1; $i < $N; ++$i) {
    $ans = lcm($ans, $a[$i]);
}

echo $ans . PHP_EOL;

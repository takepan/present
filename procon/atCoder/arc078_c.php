<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
$cnt = count($a);
$total = array_sum($a);
// echo "total: " . $total . PHP_EOL;
$sum = 0;
$ans = PHP_INT_MAX;

for ($i = 0; $i < $cnt - 1; $i++) {
    
    $sum += $a[$i];
    $rest = $total - $sum;
    // echo $sum . " " . $rest . "\n";
    $ans = min($ans, abs($sum - $rest));
}
echo $ans . PHP_EOL;

answer(1);
answer(9);
answer(10);
answer(99);
answer(100);
answer(999);
answer(1000);
answer(9999);
answer(10000);
answer(99999);
answer(100000);
answer(999999);
answer(1000000);
answer(9999999);
answer(10000000);
answer(99999999);
answer(100000000);
answer(999999999);
answer(1000000000);

function answer($n) {
    $x = 99;

    $x_s = (string)$x;
    $n_s = (string)$n;
    // var_dump($x_s);
    // var_dump($n_s);
    $res = strcmp($x_s, $n_s);

    if ($res <= 0) {
        $res1 = "A";
        // echo "A";
    } else {
        $res1 = "B";
        // echo "a";
    }
    if ($x <= $n) {
        $res2 = "A";
        // echo "B";
    } else {
        $res2 = "B";
        // echo "b";
    }
    if ($res1 === $res2) {
        echo "Y";
    } else {
        echo "N";
    }
}
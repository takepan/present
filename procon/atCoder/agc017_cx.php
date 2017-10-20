<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $N, $M);
$A = explode(" ", trim(fgets(STDIN)));
$ans = $N;
$sum = array_fill(1, $N, 0);
$arr = array_fill(1, $N, 0);
foreach ($A as $v) {
    // $arr[$v]++;
    manip($v, true);
    if (DEBUG) dump();
    if (DEBUG) echo $ans . PHP_EOL;
}
for ($i = 0; $i < $M; $i++) {
    if (DEBUG) printf("queue: %d/%d\n", $i + 1, $M);
    // echo "****\n";
    fscanf(STDIN, "%d %d", $X, $Y);

    // $arr[$A[$X-1]]--;
    manip($A[$X-1], false);

    $A[$X-1] = $Y;

    // $arr[$Y]++;
    manip($Y, true);

    if (DEBUG) dump();

    echo $ans . PHP_EOL;
}
if (DEBUG) echo "That's all\n";

function dump() {
    global $arr, $sum, $N;

    echo "arr: ";
    for ($x = 1; $x <= $N; $x++) {
        echo "[$x]" . $arr[$x] . " ";
    }
    echo PHP_EOL;

    echo "sum: ";
    for ($x = 1; $x <= $N; $x++) {
        echo "[$x]" . $sum[$x] . " ";
    }
    echo PHP_EOL;

}

function manip($num, $increase) {
    global $ans, $arr, $sum;
    if ($increase === true) {
        $target = $num - $sum[$num];
        if ($arr[$target] === 0) {
            $ans--;
            if (DEBUG) echo "GET!!!\n";
        }
        if (isset($arr[$target])) $arr[$target]++;
        $sum[$num]++;
    }
    if ($increase === false) {
        $target = $num - $sum[$num] + 1;
        if (isset($arr[$target]) && $arr[$target] === 1) {
            $ans++;
            if (DEBUG) echo "LOST!!!\n";
        }
        $arr[$target]--;
        $sum[$num]--;
        if ($arr[$sum] < 0) {
            exit('ERR');
        }
    }
    if (DEBUG) printf("LOG : inc:%d num:%d target:%d sum:%d\n", $increase * 1, $num, $target, $sum[$num]);
}

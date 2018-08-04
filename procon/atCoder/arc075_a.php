<?php
/*
    Problem URL : http://arc075.contest.atcoder.jp/tasks/arc075_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$arr = array();

fscanf(STDIN, "%d", $N);

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d", $arr[$i]);
}

sort($arr);
$ans = array_sum($arr);
// echo $ans . PHP_EOL;
// exit;

if ($ans % 10 != 0) {
    echo $ans . PHP_EOL;
    exit;
} 

for ($i = 0; $i < $N; $i++) {
    for ($j = $i; $j < $N; $j++) {
        $tmp = $ans - $arr[$j];
        if ($tmp % 10 != 0) {
            echo $tmp . PHP_EOL;
            exit;
        }
    }
    $ans -= $arr[$i];
}

echo $ans . PHP_EOL;

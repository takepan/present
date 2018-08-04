<?php
/*
    Problem URL : http://agc004.contest.atcoder.jp/tasks/agc004_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $N, $x);
$a = explode(" ", trim(fgets(STDIN)));
$b = array(array());
$ans = PHP_INT_MAX;

for ($k = 0; $k < $N; $k++) {
    for ($i = 0; $i < $N; $i++) {
        $tmp = $i - $k + $N * ($i < $k);
        if ($k == 0) {
            $b[$k][$i] = $a[$tmp];
        } else {
            $b[$k][$i] = min($b[$k-1][$i], $a[$tmp]);
        }
    }
    $ans = min(array_sum($b[$k]) + $x * $k, $ans);
}

echo $ans . PHP_EOL;

<?php
/*
    Problem URL : http://abc060.contest.atcoder.jp/tasks/abc060_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

list($N, $T) = explode(" ", trim(fgets(STDIN)));
$t = explode(" ", trim(fgets(STDIN)));
$ans = 0;

for ($i = $N-2; $i >= 0; $i--) {
    if ($t[$i+1] - $t[$i] < $T) {
        $ans -= $T - ($t[$i+1] - $t[$i]);
    }
}

$ans += $N * $T;

echo $ans . PHP_EOL;

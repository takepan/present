<?php
/*
    Problem URL : http://arc074.contest.atcoder.jp/tasks/arc074_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$ans = -PHP_INT_MAX;

for ($i = $N; $i <= $N * 2; $i++) {
    $x = array_slice($a, 0, $i);
    $y = array_slice($a, $i);

    rsort($x);
    sort($y);

    $x2 = array_slice($x, 0, $N);
    $y2 = array_slice($y, 0, $N);

    $xs = array_sum($x2);
    $ys = array_sum($y2);

    $ans = max($ans, $xs - $ys);
}

echo $ans . PHP_EOL;
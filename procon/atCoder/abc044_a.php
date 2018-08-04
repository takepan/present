<?php
/*
    Problem URL : http://abc044.contest.atcoder.jp/tasks/abc044_a
    (12:12:00-)
    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $K);
fscanf(STDIN, "%d", $X);
fscanf(STDIN, "%d", $Y);

$ans = 0;
$ans += min($K, $N) * $X;
if ($K < $N) {
    $ans += ($N - $K) * $Y;
}
echo $ans . PHP_EOL;

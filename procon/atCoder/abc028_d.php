<?php
/*
    Problem URL : http://abc028.contest.atcoder.jp/tasks/abc028_d

    Score  : 100
    Result : AC
    Time   : 63 ms
    Memory : 4620 KB
 */

fscanf(STDIN, "%d %d", $N, $K);

$p1 = ($K - 1) * ($N - $K) * 6;
$p2 = ($N - $K) * 3;
$p3 = ($K - 1) * 3;
$p4 = 1;

echo ($p1 + $p2 + $p3 + $p4) / pow($N, 3) . PHP_EOL;

<?php
/*
    Problem URL : http://abc053.contest.atcoder.jp/tasks/abc052_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d %d", $A, $B, $C, $D);

$AB = $A * $B;
$CD = $C * $D;
$ans = max($AB, $CD);

echo $ans . PHP_EOL;

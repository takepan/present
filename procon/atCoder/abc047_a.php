<?php
/*
    Problem URL : http://abc047.contest.atcoder.jp/tasks/abc047_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d", $a, $b, $c);

$t = $a + $b + $c;
$h = $t / 2;

echo ($h == $a || $h == $b || $h == $c) ? "Yes\n" : "No\n";

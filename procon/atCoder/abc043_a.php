<?php
/*
    Problem URL : http://arc059.contest.atcoder.jp/tasks/arc059_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d", $N);
$ans = 0;

for ($i = 1; $i <= $N; $i++) {
    $ans += $i;
}
echo $ans . PHP_EOL;

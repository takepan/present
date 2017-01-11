<?php
/*
    Problem URL : http://abc046.contest.atcoder.jp/tasks/abc046_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $N, $K);

$ans = 1;

for ($i = 0; $i < $N; $i++) {
    $ans *= $K - ($i !== 0);
}

echo $ans . PHP_EOL;
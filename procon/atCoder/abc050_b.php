<?php
/*
    Problem URL : http://abc050.contest.atcoder.jp/tasks/abc050_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d", $N);
$T = explode(" ", trim(fgets(STDIN)));
$total = array_sum($T);
fscanf(STDIN, "%d", $M);
for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $P, $X);
    echo ($total - $T[$P-1] + $X) . PHP_EOL;
}

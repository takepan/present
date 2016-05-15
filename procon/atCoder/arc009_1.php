<?php
/*
    Problem URL : http://arc009.contest.atcoder.jp/tasks/arc009_1

    Score  : 100
    Result : AC
    Time   : 55 ms
    Memory : 3936 KB
 */

$ans = 0;

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    $ans += $a * $b;
}
echo floor($ans * 1.05) . PHP_EOL;

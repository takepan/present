<?php
/*
    Problem URL : http://code-festival-2014-qualb.contest.atcoder.jp/tasks/code_festival_qualB_b

    Score  : 100
    Result : AC
    Time   : 178 ms
    Memory : 3796 KB
 */

$ans = 0;
$sum = 0;

fscanf(STDIN, "%d %d", $N, $K);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d", $a);
    $sum += $a;
    if ($sum >= $K && $ans == 0) {
        $ans = $i + 1;
    }
}

echo $ans . PHP_EOL;

<?php
/*
    Problem URL : http://abc060.contest.atcoder.jp/tasks/abc060_d

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('memory_limit', '256M');

list($N, $W) = explode(" ", trim(fgets(STDIN)));

$w = array_fill(0, $N, 0);
$v = array_fill(0, $W, 0);

$tmp1 = array_fill(0, $N + 1, 0);
$tmp2 = array_fill(0, $W + 1, 0);

$dp = array($tmp1, $tmp2);

for ($i = 0; $i < $N; $i++) {
    list($w[$i], $v[$i]) = explode(" ", trim(fgets(STDIN)));
}

for ($j = 0; $j <= $W; $j++) {
    $dp[$N][$j] = 0;
}

for ($i = $N - 1; $i >= 0; $i--) {
    for ($j = 0; $j <= $W; $j++) {
        // printf("%d < %d\n", $j, $w[$i]);
        if ($j < $w[$i]) {
            $dp[$i][$j] = $dp[$i + 1][$j];
        } else {
            $dp[$i][$j] = max($dp[$i + 1][$j], $dp[$i + 1][$j - $w[$i]] + $v[$i]);
        }
        // printf("%d %d %d\n", $i, $j, $dp[$i][$j]);
    }
}

echo $dp[0][$W]."\n";
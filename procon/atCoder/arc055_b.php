<?php
/*
    Problem URL : http://arc055.contest.atcoder.jp/tasks/arc055_b

    Score  :
    Result :
    Time   :  ms
    Memory :  KB
 */

// ini_set('memory_limit', -1);

fscanf(STDIN, "%d %d", $N, $K);

for ($x = 0; $x < $N + 1; $x++) {
    for ($y = 0; $y < $N + 1; $y++) {
        $memo[$x][$y] = -1;
    }
}

echo dfs(1, $K);

function dfs($step, $k)
{
    global $N, $memo;

    if ($k <= 0) return 0;
    if ($k >= $N - $step + 1) return 1;
    if ($memo[$step][$k] >= 0) return $memo[$step][$k];

    $left = $N + 1 - $step;
    $yes = 1.0 / $left;
    $fake = (1 - $yes) / $step;
    $no = 1 - $fake - $yes;

    $take = ($yes * 1 + $fake * dfs($step + 1, $k - 1));
    $nottake = ($fake * dfs($step + 1, $k));

    return $memo[$step][$k] = $no * dfs($step + 1, $k) + max($take, $nottake);
}

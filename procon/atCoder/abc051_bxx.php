<?php
/*
    Problem URL : http://abc051.contest.atcoder.jp/tasks/abc051_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $K, $S);

for ($i = 0; $i <= $K; $i++) {
    $rest = $S - $i;
    if (0 <= $rest && $rest <= $K + $K) {
        $ans += min($rest, $K + $K - $rest) + 1;
    }
}

echo $ans . PHP_EOL;

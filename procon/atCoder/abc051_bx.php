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
    for ($j = 0; $j <= $K; $j++) {
        $rest = $S - $i - $j;
        if (0 <= $rest && $rest <= $K) {
            $ans++;
        }
    }
}

echo $ans . PHP_EOL;

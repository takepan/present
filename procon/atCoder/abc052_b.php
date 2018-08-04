<?php
/*
    Problem URL : http://abc053.contest.atcoder.jp/tasks/abc052_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $S);

$ans = 0;
$cur = 0;

for ($i = 0; $i < $N; $i++) {
    switch($S[$i]) {
        case "I":
            $cur++;
            $ans = max($ans, $cur);
            break;

        case "D":
            $cur--;
            break;

    }
}

echo $ans . PHP_EOL;

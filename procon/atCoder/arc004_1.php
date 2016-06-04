<?php
/*
    Problem URL : http://arc004.contest.atcoder.jp/tasks/arc004_1

    Score  : 100
    Result : AC
    Time   : 66 ms
    Memory : 4392 KB
 */

$ans = 0;

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $x[$i], $y[$i]);
}
for ($i = 0; $i < $N - 1; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $dist = pow($x[$i] - $x[$j], 2) + pow($y[$i] - $y[$j], 2);
        $ans = max($dist, $ans);
    }
}

echo sqrt($ans) . PHP_EOL;

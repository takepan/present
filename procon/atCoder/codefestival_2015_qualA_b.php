<?php
/*
    Problem URL : http://code-festival-2015-quala.contest.atcoder.jp/tasks/codefestival_2015_qualA_b

    Score  : 100
    Result : AC
    Time   : 52 ms
    Memory : 4496 KB
 */

$ans = 0;

fscanf(STDIN, "%d", $N);
$A = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $N; $i++) {
    $ans += $A[$i] * pow(2, $N - $i - 1);
}

echo $ans . PHP_EOL;

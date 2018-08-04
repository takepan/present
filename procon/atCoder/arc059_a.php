<?php
/*
    Problem URL : http://arc059.contest.atcoder.jp/tasks/arc059_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$aMin = min($a);
$aMax = max($a);
$ans = PHP_INT_MAX;

for ($i = $aMin; $i <= $aMax; $i++) {
    $tmp = 0;
    foreach ($a as $v) {
        $tmp += pow($v - $i, 2);
    }
    $ans = min($ans, $tmp);
}

echo $ans . PHP_EOL;

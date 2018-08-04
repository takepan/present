<?php
/*
    Problem URL : http://agc002.contest.atcoder.jp/tasks/agc002_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('memory_limit', '256M');

fscanf(STDIN, "%d %d", $N, $M);
// echo "{$N} {$M}\n";

$arrB = array_pad(array(), $N+1, 1);
$arrR = array_pad(array(), $N+1, 0);
$arrR[1] = 1;

unset($arrB[0]);
unset($arrR[0]);

// var_dump($arrB);
// var_dump($arrR);


for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $x, $y);
    // echo $i . PHP_EOL;
    if ($arrR[$x] === 1) {
        if ($arrB[$x] === 1) {
            $arrR[$x] = 0;
            $arrR[$y] = 1;
        } else {
            $arrR[$x] = 1;
            $arrR[$y] = 1;
        }
    }
    $arrB[$x]--;
    $arrB[$y]++;
}
echo array_sum($arrR) . PHP_EOL;

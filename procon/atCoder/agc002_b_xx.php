<?php
/*
    Problem URL : http://agc002.contest.atcoder.jp/tasks/agc002_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

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
    fscanf(STDIN, "%d %d", $x[$i], $y[$i]);
}

for ($i = 0; $i < $M; $i++) {
    // echo $i . PHP_EOL;
    if ($arrR[$x[$i]] === 1) {
        if ($arrB[$x[$i]] === 1) {
            $arrR[$x[$i]] = 0;
            $arrR[$y[$i]] = 1;
        } else {
            $arrR[$x[$i]] = 1;
            $arrR[$y[$i]] = 1;
        }
    }
    $arrB[$x[$i]]--;
    $arrB[$y[$i]]++;
}
echo array_sum($arrR) . PHP_EOL;

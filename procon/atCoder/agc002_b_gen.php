<?php
/*
    Problem URL : http://agc002.contest.atcoder.jp/tasks/agc002_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

$N = 100000;
$M = 100000;

$fp = fopen(__DIR__ . "/agc002_b_gen_{$N}_{$M}.dat", "w+");

fputs($fp, "{$N} {$M}\n");
while ($M > 0) {
    $a = mt_rand(1, 100);
    $b = mt_rand(1, 100);
    // echo "{$a} {$b}\n";
    if ($a == $b) continue;
    $M--;
    fputs($fp, "{$a} {$b}\n");
}
fclose($fp);

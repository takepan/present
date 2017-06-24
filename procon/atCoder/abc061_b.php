<?php
/*
    Problem URL : http://agc013.contest.atcoder.jp/tasks/agc013_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */


// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$arr = array();

fscanf(STDIN, "%d %d", $N, $M);
for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    // echo $a . " " . $b . PHP_EOL;
    $arr[$a]++;
    $arr[$b]++;
}

for ($i = 1; $i <= $N; $i++) {
    echo $arr[$i] ?: 0;
    echo PHP_EOL;
}

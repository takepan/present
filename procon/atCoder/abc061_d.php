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

$arrF = array();
$arrT = array();

fscanf(STDIN, "%d %d", $N, $M);
for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d %d", $a, $b, $c);
    $arr[$a][$b] = $c;
    $arrF[$a]++;
    $arrT[$b]++;
}

for ($i = 1; $i <= $N; $i++) {
    if ($arrF[$i] == 1 && $arrT[$i] == 1) {
        
    }
}

$pos = 1;


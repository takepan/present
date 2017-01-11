<?php
/*
    http://cf16-final-open.contest.atcoder.jp/tasks/cf16-final-open_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);
$score = 0;
$ans = array();
for ($i = 1; $i < 100000; $i++) {
    $score += $i;
    $ans[] = $i;
    if ($score === $N) {
        echo implode(" ", $ans);
        echo PHP_EOL;
        exit;
    }
    if ($score > $N) {
        $diff = abs($score - $N);
        unset($ans[$diff-1]);
        echo implode(" ", $ans);
        echo PHP_EOL;
        exit;
    }
}

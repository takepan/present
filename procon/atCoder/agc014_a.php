<?php
/*
    Problem URL : http://abc060.contest.atcoder.jp/tasks/abc060_d

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('memory_limit', '256M');

// define('DEBUG', true);
define('DEBUG', false);

$ans = 0;
$mem = array();

fscanf(STDIN, "%d %d %d", $A, $B, $C);

while ($A % 2 != 1 && $B %2 != 1 && $C %2 != 1) {
    $str = "{$A}_{$B}_{$C}";
    if (isset($mem[$str])) {
        echo "-1\n";
        exit;
    } else {
        $mem[$str] = 1;
    }

    $ans ++;

    $A2 = $A / 2;
    $B2 = $B / 2;
    $C2 = $C / 2;

    $A = $B2 + $C2;
    $B = $A2 + $C2;
    $C = $A2 + $B2;

    // echo "{$A} {$B} {$C}\n";
}

echo $ans . PHP_EOL;

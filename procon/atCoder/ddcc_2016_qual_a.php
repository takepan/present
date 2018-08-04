<?php
/*
    http://ddcc2016-qual.contest.atcoder.jp/tasks/ddcc_2016_qual_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d", $A, $B, $C);

// echo "{$N} {$x}\n";
// exit;

printf("%.f", $C / $A * $B);
echo PHP_EOL;

<?php
/*
    Problem URL : http://code-festival-2014-quala.contest.atcoder.jp/tasks/code_festival_qualA_c

    Score  : 
    Result : 
    Time   : 
    Memory : 
 */

fscanf(STDIN, "%d %d", $A, $B);

$A--;

$A1 = floor($A / 4);
$A2 = floor($A / 100);
$A3 = floor($A / 400);

$B1 = floor($B / 4);
$B2 = floor($B / 100);
$B3 = floor($B / 400);

echo ($B1 - $B2 + $B3) - ($A1 - $A2 + $A3) . PHP_EOL;

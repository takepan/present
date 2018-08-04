<?php
/*
    Problem URL : http://abc053.contest.atcoder.jp/tasks/abc053_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%s ", $s);

$posA = strpos($s, 'A');
$posZ = strrpos($s, 'Z');

echo ($posZ - $posA + 1) . PHP_EOL;

<?php
/*
    http://arc062.contest.atcoder.jp/tasks/arc062_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $s);
// echo $s . PHP_EOL;
$countG = substr_count($s, "g");
$countP = strlen($s) - $countG;
// echo "{$countG} {$countP}\n";
echo floor(($countG - $countP) / 2) . PHP_EOL;

<?php
/*
    Problem URL : http://abc050.contest.atcoder.jp/tasks/abc050_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %s %d", $a, $op, $b);

switch ($op) {
    case "+":
        echo $a + $b . PHP_EOL;
        break;

    case "-":
        echo $a - $b . PHP_EOL;
        break;
}

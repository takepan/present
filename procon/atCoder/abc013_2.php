<?php
/*
    Problem URL : http://abc013.contest.atcoder.jp/tasks/abc013_2

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);

echo min(abs($a - $b), 10-abs($a - $b)) . PHP_EOL;

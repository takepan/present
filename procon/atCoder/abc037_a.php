<?php
    /*
        Problem URL : http://abc037.contest.atcoder.jp/tasks/abc037_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    define('num', 3);

    fscanf(STDIN, "%d %d %d", $A, $B, $C);

    $D = min(array($A, $B));

    echo floor($C / $D) . PHP_EOL;

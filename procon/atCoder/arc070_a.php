<?php
    /*
        Problem URL : http://arc070.contest.atcoder.jp/tasks/arc070_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    define('DEBUG', false);

    fscanf(STDIN, "%d\n", $X);

    for ($i = 1; $i < PHP_INT_MAX; $i++) {
        $a += $i;
        if ($a >= $X) {
            echo $i . PHP_EOL;
            exit;
        }
    }


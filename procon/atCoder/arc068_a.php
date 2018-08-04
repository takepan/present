<?php
    /*
        Problem URL : http://arc068.contest.atcoder.jp/tasks/arc068_a
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
    // define('DEBUG', true);
    define('DEBUG', false);

    $kai = 0;

    fscanf(STDIN, "%d", $x);

    $kai = floor($x / 11);
    $x -= 11 * $kai;

    $kai += $kai;

    if ($x > 6) {
        $kai += 2;
    } elseif ($x > 0) {
        $kai += 1;
    }

    echo sprintf("%d\n", $kai);

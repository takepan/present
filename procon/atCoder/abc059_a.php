<?php
    /*
        Problem URL : http://abc059.contest.atcoder.jp/tasks/abc059_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    // define('DEBUG', true);
    define('DEBUG', false);

    if (DEBUG) {
        $start = microtime(true);
    }

    $a = explode(" ", trim(fgets(STDIN)));

    foreach ($a as $str) {
        echo strtoupper(substr($str, 0, 1));
    }
    echo PHP_EOL;

<?php
    /*
        Problem URL : http://abc059.contest.atcoder.jp/tasks/abc059_b

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

    fscanf(STDIN, "%s", $A);
    fscanf(STDIN, "%s", $B);

    $lenA = strlen($A);
    $lenB = strlen($B);

    if ($lenA > $lenB) {
        echo "GREATER\n";
        exit;
    }
    if ($lenA < $lenB) {
        echo "LESS\n";
        exit;
    }
    if ($A == $B) {
        echo "EQUAL\n";
        exit;
    }
    if ($A > $B) {
        echo "GREATER\n";
    } else {
        echo "LESS\n";
    }

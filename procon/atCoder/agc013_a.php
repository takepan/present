<?php
    /*
        Problem URL : http://agc013.contest.atcoder.jp/tasks/agc013_a

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

    $ans = 0;
    $direction = "";
    $prev = "";

    fscanf(STDIN, "%d\n", $N);
    $A = explode(" ", trim(fgets(STDIN)));

    foreach ($A as $val) {
        if ($prev == "") {
            $ans++;
        } elseif ($prev < $val) {
            $direction_tmp = "increase";
        } elseif ($prev > $val) {
            $direction_tmp = "decrease";
        } else {

        }

        if ($direction == "") {
            $direction = $direction_tmp;
        } else {
            if ($direction != $direction_tmp) {
                $direction = "";
                $ans++;
            }
        }
        $prev = $val;
        if (DEBUG) echo "$val $ans $direction_tmp \n";
    }

    echo $ans . PHP_EOL;

<?php
    /*
        Problem URL : http://agc011.contest.atcoder.jp/tasks/agc011_f

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    define('DEBUG', false);

    $T = array();

    fscanf(STDIN, "%d %d\n", $N, $K);
    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d %d\n", $A[$i], $B[$i]);
        if ($A[$i] * 2 > $K) {
            echo "-1\n";
            exit;
        }
    }
    var_dump($A);
    $down[0] = 0;
    for ($i = 1; $i < $N; $i++) {
        $down[$i] = $down[$i-1] + $A[$i-1];
        $current = $down[$i];
    }
    $current += $A[$N-1];
    echo $current . PHP_EOL;
    exit;
    for ($i = $N; $i > 0; $i++) {
        // $from
    }

    var_dump($down);

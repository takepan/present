<?php
    /*
        Problem URL : http://tdpc.contest.atcoder.jp/tasks/tdpc_contest

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%d", $N);
    $p = explode(" ", trim(fgets(STDIN)));

    $arr = array(0 => 1);

    foreach ($p as $point) {
        foreach ($arr as $score => $ichi) {
            $arr[$score+$point] = 1;
        }
    }

    echo count($arr) . PHP_EOL;

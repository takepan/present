<?php
    /*
        Problem URL : http://s8pc-1.contest.atcoder.jp/tasks/s8pc_1_a

        Result : AC
        Time   : 122ms
        Memory : 6068KB
     */

    $fp = fopen('php://stdin', 'r');
    if (!feof($fp)) {
        $N = trim(fgets($fp));
    }

    $time_f = "05:00:00";
    $time_t = "23:00:00";

    $time_diff = strtotime($time_t) - strtotime($time_f);

    echo $time_diff / ($N - 1) / 60;
    echo PHP_EOL;


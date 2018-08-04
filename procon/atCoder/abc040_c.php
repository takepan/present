<?php
    /*
        Problem URL : http://abc040.contest.atcoder.jp/tasks/abc040_c

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));
    $m = array('0' => 0);

    for ($i = 1; $i < $N; $i++) {
        if ($i == 1) {
            $m[$i] += abs($a[$i-1] - $a[$i]);
        } else {
            $m[$i] += min($m[$i-2] + abs($a[$i-2] - $a[$i]), $m[$i-1] + abs($a[$i-1] - $a[$i]));
        }
    }

    echo $m[$N-1] . PHP_EOL;


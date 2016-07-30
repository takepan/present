<?php
    /*
        Problem URL : http://tenka1-2012-quala.contest.atcoder.jp/tasks/tenka1_2012_qualA_1

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'Off');

    $m = array(0 => 1);
    $sum[0] = array_sum($m);

    fscanf(STDIN, "%d", $n);

    for ($i = 1; $i <= $n; $i++) {
        if ($i >= 2) {
            $m[$i] = $sum[$i - 2];
        }
        $sum[$i] = $sum[$i-1] + $m[$i];
    }

    echo $sum[$n] . PHP_EOL;


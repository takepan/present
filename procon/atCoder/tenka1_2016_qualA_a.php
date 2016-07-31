<?php
    /*
        Problem URL : http://tenka1-2016-quala.contest.atcoder.jp/tasks/tenka1_2016_qualA_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    $ans = 0;

    $n = 100;

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 === 0) continue;
        if ($i % 5 === 0) continue;
        $ans += $i;
    }

    echo $ans . PHP_EOL;

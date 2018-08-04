<?php
    /*
        Problem URL : http://tenka1-2014-quala.contest.atcoder.jp/tasks/tenka1_2014_qualA_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    $arr = array();
    for ($i = 1; $i <= 1000; $i++) {
        $arr[] = strval($i);
    }

    sort($arr, SORT_STRING);

    echo implode(PHP_EOL, $arr) . PHP_EOL;

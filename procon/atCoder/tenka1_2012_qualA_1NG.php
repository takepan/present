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

    $m = array();

    fscanf(STDIN, "%d", $n);

    something(0);
    // asort($m);
    echo array_sum($m) . PHP_EOL;

    function something($birth)
    {
        global $m;
        global $n;

        $m[$birth]++;
        for ($i = $birth + 2; $i <= $n; $i++)
        {
            something($i);
        }
    }

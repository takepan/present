<?php
    /*
        Problem URL : http://wupc2nd.contest.atcoder.jp/tasks/wupc_01

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%d %d", $N, $M);

    $dango = 0;
    for ($i = 0; $i < $N; $i++) {
        $dango += pow($i+1, 2);
    }

    echo $dango % $M . PHP_EOL;

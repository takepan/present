<?php
    /*
        Problem URL : http://k2pc-easy.contest.atcoder.jp/tasks/k2pc001_e1

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%d %d %d", $a, $b, $c);
    fscanf(STDIN, "%d", $N);

    $arr = array();
    $arr[] = $a >= $N ? 0 : $N - $a;
    $arr[] = $b >= $N * 2 ? 0 : $N * 2 - $b;
    $arr[] = $c >= $N * 3 ? 0 : $N * 3 - $c;

    echo implode(" ", $arr) . PHP_EOL;

<?php
    /*
        Problem URL : https://arc035.contest.atcoder.jp/tasks/arc035_b

        Score  : 100
        Result : AC
        Time   : 103 ms
        Memory : 6036 KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    $arr = array();
    $answer = 1;
    $tide = 0;
    $penalty = 0;
    define('MOD', 1000000007);

    $fp = fopen('php://stdin', 'r+');
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; ++$i) {
        $T = trim(fgets($fp));
        $arr[$T]++;
    }

    ksort($arr);
    //var_dump($arr);

    foreach ($arr as $k => $v) {

        for ($i = 0; $i < $v; $i++) {
            $tide += $k;
            $penalty += $tide;
            //echo $penalty . PHP_EOL;
            $answer = bcmul($answer, $i + 1);
            if ($answer > MOD) {
                $answer = bcmod($answer, MOD);
            }
        }
    }
    //echo PHP_EOL;
    echo $penalty.PHP_EOL;
    echo $answer.PHP_EOL;

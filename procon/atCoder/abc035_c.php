<?php
    /*
        Problem URL : https://abc035.contest.atcoder.jp/tasks/abc035_c

        Score  : 100
        Result : AC
        Time   : 1987 ms
        Memory : 16888 KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    $arr = array();
    $num = 0;

    $fp = fopen("php://stdin", "r+");
    list($N, $Q) = explode(" ", trim(fgets($fp)));
    for ($i = 0; $i < $Q; $i++) {
        list($l, $r) = explode(" ", trim(fgets($fp)));
        $arr[$l-1]++;
        $arr[$r]++;
    }

    for ($i = 0; $i < $N; $i++) {
        if (isset($arr[$i])) {
            $num = ($num + $arr[$i]) % 2;
        }
        echo $num;
    }

    echo PHP_EOL;

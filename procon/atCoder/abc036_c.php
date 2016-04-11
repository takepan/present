<?php
    /*
        Problem URL : https://abc036.contest.atcoder.jp/tasks/abc036_c

        Score  : 100
        Result : AC
        Time   : 1227 ms
        Memory : 63860 KB
     */

    $a = array();
    $b = array();
    $c = array();

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; $i++) {
        $a[$i] = trim(fgets($fp));
        $b[$a[$i]] = 1;
    }
    $c = array_keys($b);
    sort($c);
    $c = array_flip($c);
    for ($i = 0; $i < $N; $i++) {
        echo $c[$a[$i]] . PHP_EOL;
    }

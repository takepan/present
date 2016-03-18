<?php
    /*
        Problem URL : https://abc017.contest.atcoder.jp/tasks/abc017_a

        Score  : 100
        Result : AC
        Time   : 49 ms
        Memory : 3796 KB
     */

    define('Q_NUM', 3);
    $score = 0;

    $fp = fopen("php://stdin", "r+");
    for ($i = 0; $i < Q_NUM; $i++) {
        list($s, $e) = explode(" ", trim(fgets($fp)));
        $score += $s * $e / 10;
    }

    echo $score . PHP_EOL;

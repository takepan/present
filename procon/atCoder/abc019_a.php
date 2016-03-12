<?php
    /*
        Problem URL : https://abc019.contest.atcoder.jp/tasks/abc019_a

        Score  : 100
        Result : AC
        Time   : 51 ms
        Memory : 3952 KB
     */

    $fp = fopen("php://stdin", "r+");
    $arr = explode(" ", trim(fgets($fp)));
    echo (array_sum($arr) - max($arr) - min($arr)) . PHP_EOL;

<?php
    /*
        Problem URL : https://abc034.contest.atcoder.jp/tasks/abc034_b

        Score  : 100
        Result : AC
        Time   : 52 ms
        Memory : 4500 KB
     */

    $fp = fopen("php://stdin", "r+");
    $n = trim(fgets($fp));
    if ($n %2 == 0) {
        echo ($n - 1) . PHP_EOL;
    } else {
        echo ($n + 1) . PHP_EOL;
    }

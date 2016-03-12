<?php
    /*
        Problem URL : https://abc020.contest.atcoder.jp/tasks/abc020_b

        Score  : 100
        Result : AC
        Time   : 52 ms
        Memory : 4508 KB
     */

    $fp = fopen("php://stdin", "r+");
    list($A, $B) = explode(" ", trim(fgets($fp)));
    $C = $A . $B;
    echo ($C * 2) . PHP_EOL;

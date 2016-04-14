<?php
    /*
        Problem URL : https://arc039.contest.atcoder.jp/tasks/arc039_a

        Score  : 100
        Result : AC
        Time   : 55 ms
        Memory : 4612 KB
     */

    $fp = fopen("php://stdin", "r+");
    list($A, $B) = explode(" ", trim(fgets($fp)));

    $arr = array(
        (9 - $A[0]) * 100,
        (9 - $A[1]) * 10,
        (9 - $A[2]) * 1,
        ($B[0] - 1) * 100,
        $B[1] * 10,
        $B[2] * 1,
    );

    echo max($arr) + ($A - $B) . PHP_EOL;

<?php
    /*
        Problem URL : http://abc031.contest.atcoder.jp/tasks/abc031_a

        Result : AC
        Time   : 59 ms
        Memory : 4512 KB
     */

    $fp = fopen("php://stdin", "r+");
    $line1 = trim(fgets($fp));
    list($A, $D) = explode(" ", $line1);

    echo max($A, $D) * (min($A, $D) + 1);
    echo PHP_EOL;

<?php
    /*
        Problem URL : http://arc050.contest.atcoder.jp/tasks/arc050_a

        Score  : 100
        Result : AC
        Time   : 32 ms
        Memory : 3452 KB
     */

    $fp = fopen("php://stdin", "r+");
    list($upper, $lower) = explode(" ", trim(fgets($fp)));
    $upper_ord = ord($upper);
    $lower_ord = ord($lower);
    // echo "$upper_ord $lower_ord \n";

    echo ($lower_ord - $upper_ord == 32) ? "Yes" : "No";
    echo PHP_EOL;

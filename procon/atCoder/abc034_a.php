<?php
    /*
        Problem URL : https://abc034.contest.atcoder.jp/tasks/abc034_a

        Score  : 100
        Result : AC
        Time   : 55 ms
        Memory : 4568 KB
     */

    $fp = fopen("php://stdin", "r+");
    list($x, $y) = explode(" ", trim(fgets($fp)));

    if ($x > $y) {
        echo "Worse" .  PHP_EOL;
    }

    if ($x < $y) {
        echo "Better" .  PHP_EOL;
    }
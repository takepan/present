<?php
    /*
        Problem URL : https://abc035.contest.atcoder.jp/tasks/abc035_a

        Score  : 100
        Result : AC
        Time   : 25 ms
        Memory : 3452 KB
     */

    $fp = fopen("php://stdin", "r+");
    list($W, $H) = explode(" ", trim(fgets($fp)));

    if ($W / 4 * 3 == $H) {
        echo "4:3\n";
    } else {
        echo "16:9\n";
    }

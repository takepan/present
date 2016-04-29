<?php
    /*
        Problem URL : http://arc030.contest.atcoder.jp/tasks/arc030_1

        Score  : 100
        Result : AC
        Time   : 56 ms
        Memory : 3792 KB
     */

    $fp = fopen("php://stdin", "r+");
    $n = trim(fgets($fp));
    $k = trim(fgets($fp));

    if ($n / 2 >= $k) {
    	echo "YES\n";
    } else {
    	echo "NO\n";
    }

<?php
    /*
        Problem URL : http://abc029.contest.atcoder.jp/tasks/abc029_b

        Result : AC
        Time   : 65 ms
        Memory : 4504 KB
     */

    $ans = 0;
    $fp = fopen("php://stdin", "r+");
    $N = 12;
    for ($i = 0; $i < $N; $i++) {
        $S = trim(fgets($fp));
        if (preg_match("/r/", $S)) {
            $ans++;
        }
    }

    echo $ans . PHP_EOL;

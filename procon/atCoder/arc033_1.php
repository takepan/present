<?php
    /*
        Problem URL : http://arc033.contest.atcoder.jp/tasks/arc034_1

        Score  : 100
        Result : AC
        Time   : 50 ms
        Memory : 3788 KB
     */

    $fp = fopen("php://stdin", "r+");
    $a = trim(fgets($fp));
    $answer = 0;
    for ($i = 0; $i < $a; $i++) {
        $answer += ($i + 1);
    }
    echo $answer . PHP_EOL;

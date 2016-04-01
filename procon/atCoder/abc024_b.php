<?php
    /*
        Problem URL : https://abc024.contest.atcoder.jp/tasks/abc024_b

        Score  : 100
        Result : AC
        Time   : 191 ms
        Memory : 4544 KB
     */

    $answer = 0;
    $prevA = NULL;

    $fp = fopen("php://stdin", "r+");
    list($N, $T) = explode(" ", trim(fgets($fp)));
    for ($i = 0; $i < $N; $i++) {
        $A = trim(fgets($fp));
        if ($i != 0) {
            if ($A - $prevA < $T) {
                $answer += ($A - $prevA);
            } else {
                $answer += $T;
            }
        }
        $prevA = $A;
    }

    $answer += $T;

    echo $answer . PHP_EOL;

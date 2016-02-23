<?php
    /*
        Problem URL : http://abc026.contest.atcoder.jp/tasks/abc026_b

        Result : AC
        Time   : 59 ms
        Memory : 4876 KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; $i++) {
        $R[$i] = trim(fgets($fp));
    }

    $answer = 0;

    rsort($R);

    // var_dump($R);

    for ($i = 0; $i < $N; $i++) {
        if ($i % 2 == 0) {
            $answer += $R[$i] * $R[$i];
        } else {
            $answer -= $R[$i] * $R[$i];
        }
    }

    echo ($answer * M_PI) . PHP_EOL;

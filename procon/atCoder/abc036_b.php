<?php
    /*
        Problem URL : https://abc036.contest.atcoder.jp/tasks/abc036_b

        Score  : 100
        Result : AC
        Time   : 48 ms
        Memory : 3832 KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; $i++) {
        $m[] = trim(fgets($fp));
    }
    
    // var_dump($m);

    $x = 0;
    $y = 0;

    for ($x = 0; $x < $N; $x++) {
        // echo $x . "1" . $y . PHP_EOL;
        for ($y = $N - 1; $y >= 0; $y--) {
            // echo $x . "2" . $y . PHP_EOL;
            echo $m[$y][$x];
        }
        echo PHP_EOL;
    }

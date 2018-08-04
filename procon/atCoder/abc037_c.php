<?php
    /*
        Problem URL : http://abc037.contest.atcoder.jp/tasks/abc037_c

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    fscanf(STDIN, "%d %d", $N, $K);
    $arr = explode(" ", trim(fgets(STDIN)));

    $ans = 0;
    $a = 0;
    $b = 0;

    for ($i = 0; $i < $N; $i++) {
        $a = $i + 1;
        $b = $N - $i;
        $c = min(array($a, $b, $K, $N - $K + 1));
        // echo $c . PHP_EOL;
        $ans += $c * $arr[$i];
    }
    echo $ans . "\n";

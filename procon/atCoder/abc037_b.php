<?php
    /*
        Problem URL : http://abc037.contest.atcoder.jp/tasks/abc037_b

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    fscanf(STDIN, "%d %d", $N, $Q);

    $arr = array();
    $arr = array_pad($arr, $N + 1, 0);
    for ($i = 0; $i < $Q; $i++) {
        fscanf(STDIN, "%d %d %d", $L, $R, $T);
        for ($j = $L; $j <= $R; $j++) {
            $arr[$j] = $T;
        }
    }

    for ($i = 1; $i <= $N; $i++) {
        echo $arr[$i] . PHP_EOL;
    }

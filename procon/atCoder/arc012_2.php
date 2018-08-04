<?php
    /*
        Problem URL : http://arc012.contest.atcoder.jp/tasks/arc012_2

        Score  : 100
        Result : AC
        Time   : 54 ms
        Memory : 3808 KB
     */

    fscanf(STDIN, "%d %d %d %d", $N, $va, $vb, $L);

    for ($i = 0; $i < $N; $i++) {
        $tmp = ($i == 0) ? $L : $k_dst;
        $t_sec = $tmp / $va;
        $k_dst = $t_sec * $vb;
    }
    echo sprintf("%F\n", floatval($k_dst));


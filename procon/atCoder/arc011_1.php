<?php
    /*
        Problem URL : http://arc011.contest.atcoder.jp/tasks/arc011_1

        Score  : 100
        Result : AC
        Time   : 54 ms
        Memory : 3984 KB
     */


    list($m, $n, $N) = explode(" ", trim(fgets(STDIN)));

    $ans = $N;

    while ($N >= $m) {
        $sets = floor($N / $m);
        $dekiru = $sets * $n;
        $ans += $dekiru;
        $N -= $m * $sets;
        //echo "{$N}\n";
        $N += $dekiru;
        // echo "{$N} {$ans}\n";
        // sleep(1);
    }

    echo $ans . PHP_EOL;

<?php
    /*
        Problem URL : http://abc014.contest.atcoder.jp/tasks/abc014_3

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    define('DEBUG', false);

    $T = array();

    fscanf(STDIN, "%d %d %d\n", $N, $C, $K);
    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d\n", $T[]);
    }

    sort($T);

    if (DEBUG) var_dump($T);

    if (DEBUG) echo "K:{$K}\n";

    $p = 0;
    $ans = 0;
    foreach ($T as $val) {
        if ($p == 0) {
            $p1 = $val;
            $p = 1;
            $ans++;
        } else {
            if ($val <= $p1 + $K) {
                if (DEBUG) echo "{$val} <= {$p1} + {$K}\n";
                $p++;
            } else {
                $p1 = $val;
                $p = 1;
                $ans++;
            }
        }
        if (DEBUG) printf ("val:%d p1:%d p:%d ans:%d\n", $val, $p1, $p, $ans);
        if ($p >= $C) {
            $p = 0;
        }
    }

    echo $ans . PHP_EOL;
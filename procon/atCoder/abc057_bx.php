<?php
    /*
        Problem URL : http://abc057.contest.atcoder.jp/tasks/abc057_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    // define('DEBUG', true);
    define('DEBUG', false);

    if (DEBUG) {
        $start = microtime(true);
    }
    $ret = solve();
    foreach ($ret as $v) {
        echo $v . PHP_EOL;
    }
    if (DEBUG) {
        $t = microtime(true) - $start;
        printf ("Elapsed time: %7.3f sec\n", $t);
    }


    function solve() {
        $ret = array();

        fscanf(STDIN, "%d %d\n", $N, $M);
        for ($i = 1; $i <= $N; $i++) {
            fscanf(STDIN, "%d %d\n", $a[$i], $b[$i]);
        }
        for ($i = 1; $i <= $M; $i++) {
            fscanf(STDIN, "%d %d\n", $c[$i], $d[$i]);
        }

        for ($i = 1; $i <= $N; $i++) {
            $tmp = PHP_INT_MAX;
            $ans = null;
            for ($j = 1; $j <= $M; $j++) {
                $diff = abs($a[$i] - $c[$j]) + abs($b[$i] - $d[$j]);
                if ($diff < $tmp) {
                    $ans = $j;
                }
            }
            $ret[] = $ans;
        }
    }

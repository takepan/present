<?php
    /*
        Problem URL : http://abc057.contest.atcoder.jp/tasks/abc057_b

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
        $ret = PHP_INT_MAX;

        fscanf(STDIN, "%d\n", $N);
        for ($i = 1; $i <= sqrt($N); $i++) {
            if ($N % $i == 0) {
                $num = max(strlen(strval($N)), strlen(strval($i)));
                $ret = min($num, $ret);
            }
        }
        return $ret;
    }

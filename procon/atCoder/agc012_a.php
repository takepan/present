<?php
    /*
        Problem URL : http://agc012.contest.atcoder.jp/tasks/agc012_a

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
    echo solve() . PHP_EOL;
    if (DEBUG) {
        $t = microtime(true) - $start;
        printf ("Elapsed time: %7.3f sec\n", $t);
    }

    function solve() {
        $idx = array();
        $maxavg = 0;
        fscanf(STDIN, "%d\n", $N);
        $a = explode(" ", trim(fgets(STDIN)));
        rsort($a);
        // var_dump($a);
        for ($i = 0; $i < $N * 2; $i++) {
            if ($i % 2 == 1) {
                $ans += $a[$i];
            }
        }
        return $ans;
    }

<?php
    /*
        Problem URL : http://agc009.contest.atcoder.jp/tasks/agc009_a
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
    // define('DEBUG', true);
    define('DEBUG', false);

    $ans = 0;

    fscanf(STDIN, "%d", $N);
    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d %d", $a[$i], $b[$i]);
    }


    for ($i = $N-1; $i >= 0; $i--) {
        // echo "N:{$N}\n";
        // echo $a, $b, PHP_EOL;
        $p = ($a[$i] + $ans) % $b[$i];
        if ($p != 0) {
            $ans += ($b[$i] - $p);
        }
        // echo "{$i} {$ans}\n";
    }

    echo $ans . PHP_EOL;

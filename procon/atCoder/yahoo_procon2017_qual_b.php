<?php
    /*
        Problem URL : http://rco-contest-2017-qual.contest.atcoder.jp/tasks/rco_contest_2017_qual_b
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
    // define('DEBUG', true);
    define('DEBUG', false);

    fscanf(STDIN, "%d %d", $N, $K);
    $A = explode(" ", trim(fgets(STDIN)));
    
    sort($A);
    // var_dump($A);

    $ans = 0;
    for ($i = 0; $i < $K; $i++) {
        $ans += $A[$i];
    }

    echo $ans + (0+$K-1) * $K / 2;
    echo PHP_EOL;
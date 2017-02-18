<?php
    /*
        Problem URL : http://arc068.contest.atcoder.jp/tasks/arc068_b
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
    // define('DEBUG', true);
    define('DEBUG', false);

    $kai = 0;

    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));

    $a = array_unique($a);

    // var_dump($a);

    $ans = count($a);

    if ($ans % 2 == 0) {
        $ans--;
    }

    echo sprintf("%d\n", $ans);

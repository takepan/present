<?php
    /*
        Problem URL : http://abc042.contest.atcoder.jp/tasks/abc042_b
 
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // define('DEBUG', true);
    define('DEBUG', false);
 
    fscanf(STDIN, "%d %d", $N, $L);

    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%s", $S[$i]);
    }
    sort($S);

    for ($i = 0; $i < $N; $i++) {
        echo $S[$i];
    }
    echo PHP_EOL;

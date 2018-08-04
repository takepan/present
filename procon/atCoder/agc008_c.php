<?php
    /*
        Problem URL : http://agc008.contest.atcoder.jp/tasks/agc008_c
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // define('DEBUG', true);
    define('DEBUG', false);

    $arr = array();
    $ans1 = 0;
    $ans2 = 0;

    fscanf(STDIN, "%d %d %d %d %d %d %d",  $a['I'], $a['O'], $a['T'], $a['J'], $a['L'], $a['S'], $a['Z']);

    echo ($a['I'] + $a['O'] + $a['L'] + $a['J']) . PHP_EOL;

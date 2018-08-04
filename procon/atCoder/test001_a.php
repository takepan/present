<?php
    /*
        Problem URL : http://language-test-ver1.contest.atcoder.jp/tasks/test001_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%d", $N);
    $c = str_split(trim(fgets(STDIN)));

    $arr = array(1 => 0, 2 => 0, 3 => 0, 4 => 0);

    foreach ($c as $v) {
        $arr[$v]++;
    }

    echo max($arr) . " " . min($arr) . PHP_EOL;

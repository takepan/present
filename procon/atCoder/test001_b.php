<?php
    /*
        Problem URL : http://language-test-ver1.contest.atcoder.jp/tasks/test001_b

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%s", $X);
    fscanf(STDIN, "%s", $s);

    echo str_replace($X, "", $s) . PHP_EOL;

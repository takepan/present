<?php
    /*
        Problem URL : http://rco-contest-2017-qual.contest.atcoder.jp/tasks/rco_contest_2017_qual_a
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
    // define('DEBUG', true);
    define('DEBUG', false);

    $yahoo = "yahoo";
    $ans = solve($yahoo);

    fscanf(STDIN, "%s", $S);
    
    echo solve($S) == $ans ? "YES\n" : "NO\n";

    function solve($str) {
        $ans = str_split($str);
        sort($ans);
        $ans = implode("", $ans);
        return $ans;
    }

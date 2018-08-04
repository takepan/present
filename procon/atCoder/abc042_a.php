<?php
    /*
        Problem URL : http://abc042.contest.atcoder.jp/tasks/abc042_a
 
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // define('DEBUG', true);
    define('DEBUG', false);
 
    // N“ú‚ÅKŸ
    fscanf(STDIN, "%d %d %d", $A, $B, $C);

    if  ($A + $B + $C === 17) {
        echo "YES\n";
    } else {
        echo "NO\n";
    }

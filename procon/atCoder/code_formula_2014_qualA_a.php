<?php
    /*
        Problem URL : http://code-formula-2014-quala.contest.atcoder.jp/tasks/code_formula_2014_qualA_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%d", $A);

    for ($i = 1; $i <= 100; $i++) {
        if ($A === pow($i, 3)) exit("YES\n");
    }
    echo "NO\n";

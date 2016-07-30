<?php
    /*
        Problem URL : http://tenka1-2012-quala.contest.atcoder.jp/tasks/tenka1_2012_qualA_2

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    $c = trim(fgets(STDIN));

    echo preg_replace("/ +/", ",", $c) . PHP_EOL;


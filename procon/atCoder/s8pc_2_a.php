<?php
    /*
        Problem URL : http://s8pc-2.contest.atcoder.jp/tasks/s8pc_2_a

        Score  : 100
        Result : AC
        Time   : 33 ms
        Memory : 3704 KB
     */

    $fp = fopen("php://stdin", "r+");
    $S = trim(fgets($fp));
    $S = trim($S, "O");
    $S = preg_replace("/I+/", "I", $S);
    $S = preg_replace("/O+/", "O", $S);
    // echo $S;
    echo strlen($S) . PHP_EOL;

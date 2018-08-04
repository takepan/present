<?php
    /*
        Problem URL : http://arc052.contest.atcoder.jp/tasks/arc052_a

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $fp = fopen("php://stdin", "r+");
    $S = trim(fgets($fp));

    preg_match("/[0-9]+/", $S, $reg);

    echo $reg[0] . PHP_EOL;

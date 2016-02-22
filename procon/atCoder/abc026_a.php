<?php
    /*
        Problem URL : http://abc026.contest.atcoder.jp/tasks/abc026_a

        Result : AC
        Time   : 52 ms
        Memory : 4496 KB
     */

    $fp = fopen("php://stdin", "r+");
    $A = trim(fgets($fp));

    echo ($A / 2) * ($A / 2) . PHP_EOL;

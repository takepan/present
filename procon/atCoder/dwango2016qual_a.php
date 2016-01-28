<?php
    /*
        Problem URL : http://dwango2016-prelims.contest.atcoder.jp/tasks/dwango2016qual_a

        Result : AC
        Time   : 52ms
        Memory : 4492KB
     */


    $fp = fopen('php://stdin', 'r');
    $N = trim(fgets($fp));

    echo floor($N / 25) . PHP_EOL;

<?php
    /*
        Problem URL : http://abc027.contest.atcoder.jp/tasks/abc030_a

        Result : 
        Time   :  ms
        Memory :  KB
     */

    $fp = fopen("php://stdin", "r+");
    $line1 = trim(fgets($fp));
    list($L1, $L2, $L3) = explode(" ", $line1);

    if ($L1 == $L2) {
        echo $L3 . PHP_EOL;
    } else if ($L1 == $L3) {
        echo $L2 . PHP_EOL;
    } else {
        echo $L1 . PHP_EOL;
    }

<?php
    /*
        Problem URL : http://abc028.contest.atcoder.jp/tasks/abc028_c

        Result : AC
        Time   : 61 ms
        Memory : 4564 KB
     */

    $fp = fopen("php://stdin", "r+");
    list($A, $B, $C, $D, $E) = explode(" ", trim(fgets($fp)));

    if ($B + $C > $A + $D) {
        echo ( $B + $C + $E ) . PHP_EOL;
    } else {
        echo ( $A + $D + $E ) . PHP_EOL;
    }

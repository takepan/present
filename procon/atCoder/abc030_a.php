<?php
    /*
        Problem URL : http://abc030.contest.atcoder.jp/tasks/abc030_a

        Result : AC
        Time   : 54 ms
        Memory : 4568 KB
     */

    $fp = fopen("php://stdin", "r+");
    $line1 = trim(fgets($fp));
    list($A, $B, $C, $D) = explode(" ", $line1);

    $Takahashi = $B / $A;
    $Aoki = $D / $C;
    if ($Takahashi == $Aoki) {
        echo "DRAW";
    } else if ($Takahashi > $Aoki) {
        echo "TAKAHASHI";
    } else {
        echo "AOKI";
    }

    echo PHP_EOL;

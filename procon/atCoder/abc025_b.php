<?php
    /*
        Problem URL : http://abc025.contest.atcoder.jp/tasks/abc025_b

        Result : AC
        Time   : 54 ms
        Memory : 4500 KB
     */

    $pos = 0;

    $fp = fopen("php://stdin", "r+");
    list($N, $A, $B) = explode(" ", trim(fgets($fp)));
    for ($i = 0; $i < $N; $i++) {
        list($s, $d) = explode(" ", trim(fgets($fp)));
        if ($d > $B) {
            $d = $B;
        } else if ($d < $A) {
            $d = $A;
        }
        if ($s == 'West') {
            $d *= -1;
        }
        $pos += $d;
        //echo $pos . PHP_EOL;
    }

    if ($pos == 0) {
        echo "0\n";
    } else if ($pos < 0) {
        $pos *= -1;
        echo "West {$pos}\n";
    } else {
        echo "East {$pos}\n";
    }

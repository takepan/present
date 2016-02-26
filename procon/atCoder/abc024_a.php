<?php
    /*
        Problem URL : http://abc024.contest.atcoder.jp/tasks/abc024_a

        Result : AC
        Time   :  ms
        Memory :  KB
     */

    $fp = fopen("php://stdin", "r+");
    list($A, $B, $C, $K) = explode(" ", trim(fgets($fp)));
    list($S, $T) = explode(" ", trim(fgets($fp)));

    $total = $S + $T;
    
    $fee = $A * $S + $B * $T;
    
    if ($K <= $total) {
        $fee -= $total * $C;
    }
    
    echo $fee . PHP_EOL;

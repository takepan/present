<?php
    /*
        Problem URL : http://arc054.contest.atcoder.jp/tasks/arc054_a

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    list($L, $X, $Y, $S, $D) = explode(" ", trim(fgets(STDIN)));

    // 時計まわり
    $d1 = ($S < $D) ? ($D - $S) : ($D + $L - $S);
    $d2 = $L - $d1;
    $s1 = $X + $Y;
    $s2 = $Y - $X;

    if ($s2 < 0) {
        $d2 = $d1;
        $s2 = -$s2;
    }

    // echo "$d1 $d2 $s1 $s2\n";

    if ($s1 == 0) {
        $t1 = PHP_INT_MAX;
    } else {
        $t1 = $d1 / $s1;
    }

    if ($s2 == 0) {
        $t2 = PHP_INT_MAX;
    } else {
        $t2 = $d2 / $s2;
    }

    echo min($t1, $t2) . PHP_EOL;

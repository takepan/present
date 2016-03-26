<?php
    /*
        Problem URL : https://abc035.contest.atcoder.jp/tasks/abc035_b

        Score  : 101
        Result : AC
        Time   : 31 ms
        Memory : 3728 KB
     */

    $fp = fopen("php://stdin", "r+");
    $S = trim(fgets($fp));
    $T = trim(fgets($fp));

    $cntU = substr_count($S, 'U');
    $cntD = substr_count($S, 'D');
    $cntL = substr_count($S, 'L');
    $cntR = substr_count($S, 'R');
    $cntH = substr_count($S, '?');

    $x = abs($cntR - $cntL);
    $y = abs($cntU - $cntD);

    if ($T == '1') {
        echo ($x + $y + $cntH) . "\n";
    } else {
        if (($x + $y) < $cntH) {
            echo abs($x + $y - $cntH) % 2 . "\n";
        } else {
            echo ($x + $y - $cntH) . "\n";
        }
    }

<?php
    /*
        Problem URL : http://abc030.contest.atcoder.jp/tasks/abc030_b

        Result : AC
        Time   : 56 ms
        Memory : 4496 KB
     */

    $fp = fopen("php://stdin", "r+");
    list($n, $m) = explode(" ", trim(fgets($fp)));

    $n = ($n >= 12) ? $n - 12 : $n;

    $radN = ($n + $m / 60) / 12 * 360;
    $radM = $m / 60 * 360;

    // echo $radN . PHP_EOL;
    // echo $radM . PHP_EOL;

    $ans = abs($radN - $radM);
    // echo $ans . PHP_EOL;

    $ans = ($ans > 180) ? 360 - $ans : $ans;

    echo $ans . PHP_EOL;

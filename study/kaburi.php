<?php

    $maxAttempt = 30;
    $kind = 24;
    $arr = array();

    $arr[0][0] = 1;

    for ($i = 1; $i <= $maxAttempt; $i++) {

        for ($j = 0; $j <= $i; $j++) {
            $arr[$i][$j] = 0;
        }

        for ($j = 0; $j <= min($i, $kind); $j++) {
            $pct_OK = ($kind - $j) / $kind;
            $pct_NG = 1 - $pct_OK;

            // echo "{$i} {$j} ". PHP_EOL;
            // echo "OK:" . $pct_OK . PHP_EOL;
            // echo "NG:" . $pct_NG . PHP_EOL;

            // かぶらない場合
            $arr[$i][$j+1] += $arr[$i-1][$j] * $pct_OK;

            // かぶる場合
            $arr[$i][$j] += $arr[$i-1][$j] * $pct_NG;
        }

        $sum = 0;
        for ($j = 0; $j <= min($i, $kind); $j++) {
            $sum += $arr[$i][$j];
            printf("%3d %3d %15.10f", $i, $j, $arr[$i][$j] * 100);
            echo PHP_EOL;
        }
        echo "sum {$sum}\n";
        echo PHP_EOL;
    }

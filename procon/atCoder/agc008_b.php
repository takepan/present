<?php
    /*
        Problem URL : http://agc008.contest.atcoder.jp/tasks/agc008_a
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // define('DEBUG', true);
    define('DEBUG', false);

    $arr = array();

    fscanf(STDIN, "%d %d", $N, $K);
    $a = explode(" ", trim(fgets(STDIN)));
    $arrL = array();
    $arrR = array();

    $arrL[0] = $a[0] > 0 ? $a[0] : 0;
    for ($i = 1; $i < $N; $i++) {
        $arrL[$i] = $arrL[$i-1] + ($a[$i] > 0 ? $a[$i] : 0);
    }

    $arrR[$N-1] = $a[$N-1] > 0 ? $a[$N-1] : 0;
    for ($i = $N-2; $i >= 0; $i--) {
        $arrR[$i] = $arrR[$i+1] + ($a[$i] > 0 ? $a[$i] : 0);
    }
    ksort($arrR);

    $tmp = 0;
    for ($i = 0; $i < $N - $K + 1; $i++) {
        if ($i == 0) {
            for ($j = 0; $j < $K; $j++) {
                $tmp += $a[$j];
            }
        } else {
            $tmp += $a[$i + $K - 1] - $a[$i - 1];
        }
        $arrM[$i] = $arrL[$i - 1] + max(0, $tmp) + $arrR[$i + $K];
    }

    // var_dump($arrL);
    // var_dump($arrR);
    // var_dump($arrM);
    echo max($arrM) . PHP_EOL;

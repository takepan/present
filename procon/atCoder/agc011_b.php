<?php
    /*
        Problem URL : http://agc011.contest.atcoder.jp/tasks/agc011_b

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    define('DEBUG', false);

    $T = array();

    fscanf(STDIN, "%d\n", $N);
    $A = explode(" ", trim(fgets(STDIN)));
    foreach ($A as $x) {
        $sum[$x]++;
    }
    ksort($sum);
    $arr = array_keys($sum);

    if (DEBUG) var_dump($sum);
    if (DEBUG) var_dump($arr);

    $omit = 0;

    $siz = 0;

    $arrCnt = count($arr);
    for ($i = 0; $i < $arrCnt-1; $i++) {
        $siz += $arr[$i] * $sum[$arr[$i]];
        if (DEBUG) echo "siz:{$siz} ";
        $total += $sum[$arr[$i]];
        if ($siz * 2 < $arr[$i+1]) {
            $omit = $total;
        }
    }

    if (DEBUG) echo "omit:" . $omit . PHP_EOL;

    echo ($N - $omit) . PHP_EOL;
    exit;

    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d\n", $T[]);
    }

    sort($T);

    if (DEBUG) var_dump($T);

    if (DEBUG) echo "K:{$K}\n";

    $p = 0;
    $ans = 0;
    foreach ($T as $val) {
        if ($p == 0) {
            $p1 = $val;
            $p = 1;
            $ans++;
        } else {
            if ($val <= $p1 + $K) {
                if (DEBUG) echo "{$val} <= {$p1} + {$K}\n";
                $p++;
            } else {
                $p1 = $val;
                $p = 1;
                $ans++;
            }
        }
        if (DEBUG) printf ("val:%d p1:%d p:%d ans:%d\n", $val, $p1, $p, $ans);
        if ($p >= $C) {
            $p = 0;
        }
    }

    echo $ans . PHP_EOL;
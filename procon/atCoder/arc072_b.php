<?php
    /*
        Problem URL : http://arc072.contest.atcoder.jp/tasks/arc072_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    // define('DEBUG', true);
    define('DEBUG', false);

    if (DEBUG) {
        $start = microtime(true);
    }

    $a[0][0] = "a";
    $a[1][0] = "a";
    $a[1][1] = "a";

    foreach ($a as $k1 => $v1) {
        foreach ($v1 as $k2 => $v2) {
            if (!isset($))
        }
    }


    fscanf(STDIN, "%d\n", $n);
    $a = explode(" ", trim(fgets(STDIN)));

    // var_dump($a);

    $score_a = 0;
    $score_b = 0;

    $tmp = 0;

    // 最初がマイナスの場合
    for ($i = 0; $i < $n; $i++) {
        $tmp += $a[$i];
        if ($i % 2 == 0) {
            if ($tmp >= 0) {
                $score_a += $tmp + 1;
                $tmp -= ($tmp + 1);
            }
        } else {
            if ($tmp <= 0) {
                $score_a += -($tmp - 1);
                $tmp += -($tmp - 1);
            }
        }
    }


    $tmp = 0;

    // 最初がプラスの場合
    for ($i = 0; $i < $n; $i++) {
        $tmp += $a[$i];
        if ($i % 2 != 0) {
            if ($tmp >= 0) {
                $score_b += $tmp + 1;
                $tmp -= ($tmp + 1);
            }
        } else {
            if ($tmp <= 0) {
                $score_b += -($tmp - 1);
                $tmp += -($tmp - 1);
            }
        }
    }

    // echo $score_a . PHP_EOL;
    // echo $score_b . PHP_EOL;

    echo min($score_a, $score_b) . PHP_EOL;


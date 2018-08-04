<?php
    /*
        Problem URL : http://arc070.contest.atcoder.jp/tasks/arc070_b

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%d %d\n", $N, $K);

    // 満点回答諦めるの儀
    if ($N > 400 || $K > 400) {
        exit("-1\n");
    }

    $a = explode(" ", trim(fgets(STDIN)));

    $sum = array();

    foreach ($a as $key => $v) {
        if ($sum[$v] !== null) {
            continue;
        }
        $aa = $a;
        $out = array_splice($aa, $key, 1);

        $tmp = array(0 => 1);

        foreach ($aa as $val) {
            foreach ($tmp as $key2 => $dummy) {
                if ($key2+$val < $K) {
                    $tmp[$key2+$val] = 1;
                }
            }
        }

        $sum[$v] = 1;
        if (max(array_keys($tmp)) + $out[0] >= $K) {
            $sum[$v] = 0;
        }
    }
    $ans = 0;
    foreach ($a as $val) {
        $ans += $sum[$val];
    }

    echo $ans . PHP_EOL;

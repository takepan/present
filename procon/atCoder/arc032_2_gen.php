<?php
    /*
        Problem URL : http://arc032.contest.atcoder.jp/tasks/arc032_2

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $N = 20000;
    $M = 20000;

    $arr = array();

    for ($i = 0; $i < $M; $i++) {
        $bool = false;
        while(!$bool) {
            $aa = mt_rand(1, $N);
            $bb = mt_rand(1, $N);
            if ($aa != $bb) {
                $a = min($aa, $bb);
                $b = max($aa, $bb);
                if (!isset($arr[$a][$b])) {
                    $arr[$a][$b] = 1;
                    $bool = true;
                }
            }
        }
    }

    echo "{$N} {$M}\n";
    foreach ($arr as $k1 => $v1) {
        foreach ($v1 as $k2 => $v2) {
            echo "{$k1} {$k2}\n";
        }
    }

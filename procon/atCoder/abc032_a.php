<?php
    /*
        Problem URL : http://abc032.contest.atcoder.jp/tasks/abc032_a

        Result : AC
        Time   : 55ms
        Memory : 4500KB
     */

    $fp = fopen("php://stdin", "r+");
    $a = trim(fgets($fp));
    $b = trim(fgets($fp));
    $n = trim(fgets($fp));

    $bool = false;
    $aa = $a;
    $bb = $b;
    while (!$bool) {
        if ($aa == $bb) {
            $bool = true;
        } elseif ($aa < $bb) {
            $aa += $a;
        } else {
            $bb += $b;
        }
    }

    $nn = 0;
    while ($nn < $n) {
        $nn += $aa;
    }

    echo $nn . PHP_EOL;

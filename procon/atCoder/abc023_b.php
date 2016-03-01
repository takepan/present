<?php
    /*
        Problem URL : http://abc023.contest.atcoder.jp/tasks/abc023_b

        Result : AC
        Time   : 56 ms
        Memory : 4568 KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    $S = trim(fgets($fp));

    $arr = array();
    $str = "";
    for ($i = 0; $i <= 100; $i++) {
        //echo $i . PHP_EOL;
        if ($i % 3 == 0) {
            if ($str == "") {
                $str = "b";
            } else {
                $str = "b{$str}b";
            }
        } elseif ($i % 3 == 1) {
            $str = "a{$str}c";
        } else {
            $str = "c{$str}a";
        }
        $arr[$i] = $str;
        //echo "{$i} {$str}" . PHP_EOL;
    }

    $x = array_search($S, $arr);
    if ($x === false) {
        echo "-1" . PHP_EOL;
    } else {
        echo $x . PHP_EOL;
    }

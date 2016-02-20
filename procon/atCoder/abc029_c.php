<?php
    /*
        Problem URL : http://abc029.contest.atcoder.jp/tasks/abc029_c

        Result : AC
        Time   : 84 ms
        Memory : 4544 KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    $arr = array();
    $cnt = 1;

    for ($i = 0; $i < $N; $i++) {
        $arr[$i] = "a";
    }

    echo implode("", $arr) . PHP_EOL;
    while (TRUE) {
        $bool = true;
        $cursor = $N - 1;
        while ($bool) {
            if ($arr[$cursor] == "a") {
                $arr[$cursor] = "b";
                for ($i = $cursor+1; $i < $N; $i++) {
                    $arr[$i] = "a";
                }
                $bool = false;
            } else if ($arr[$cursor] == "b") {
                $arr[$cursor] = "c";
                for ($i = $cursor+1; $i < $N; $i++) {
                    $arr[$i] = "a";
                }
                $bool = false;
            } else {
                $arr[$cursor] = "a";
                if ($cursor > 0) {
                    $cursor--;
                } else {
                    //echo $cnt . PHP_EOL;
                    exit;
                }
            }
        }

        $cnt++;
        echo implode("", $arr) . PHP_EOL;
    }

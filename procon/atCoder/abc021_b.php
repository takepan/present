<?php
    /*
        Problem URL : http://abc021.contest.atcoder.jp/tasks/abc021_b

        Score  : 100
        Result : AC
        Time   : 53 ms
        Memory : 4500 KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    list($a, $b) = explode(" ", trim(fgets($fp)));
    $K = trim(fgets($fp));
    $P = explode(" ", trim(fgets($fp)));
    $tmpArr = array();

    if (in_array($a, $P) || in_array($b, $P)) {
        exit('NO' . PHP_EOL);
    }

    foreach ($P as $val) {
        if (!isset($tmpArr[$val])) {
            $tmpArr[$val] = 1;
        } else {
            exit('NO' . PHP_EOL);
        }
    }

    echo "YES" . PHP_EOL;


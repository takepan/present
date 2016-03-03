<?php
    /*
        Problem URL : https://abc021.contest.atcoder.jp/tasks/abc021_a

        Result : AC
        Time   : 52 ms
        Memory : 4496 KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));

    $arrC = array(8, 4, 2, 1);
    $arrA = array();

    foreach ($arrC as $v) {
        if ($v <= $N) {
            $arrA[] = $v;
            $N -= $v;
        }
    }

    sort($arrA);

    echo count($arrA) . PHP_EOL;
    foreach ($arrA as $v) {
        echo $v . PHP_EOL;
    }

<?php
    /*
        Problem URL : https://arc042.contest.atcoder.jp/tasks/abc042_a

        Score  : 100
        Result : AC
        Time   : 424 ms
        Memory : 47368 KB
     */

    $arrAns = array();
    $arrChk = array();
    $a = array();

    $fp = fopen("php://stdin", "r+");
    list($N, $M) = explode(" ", trim(fgets($fp)));
    for ($i = 0; $i < $M; $i++) {
        $a[$i] = trim(fgets($fp));
    }

    for ($i = $M - 1; $i >= 0; $i--) {
        if (!isset($arrChk[$a[$i]])) {
            $arrAns[] = $a[$i];
            $arrChk[$a[$i]] = 1;
        }
    }

    for ($i = 1; $i <= $N; $i++) {
        if (!isset($arrChk[$i])) {
            $arrAns[] = $i;
        }
    }

    echo implode(PHP_EOL, $arrAns);
    echo PHP_EOL;

<?php
    /*
        Problem URL : http://abc028.contest.atcoder.jp/tasks/abc028_b

        Result : AC
        Time   : 57 ms
        Memory : 4496 KB
     */

    $fp = fopen("php://stdin", "r+");
    $S = trim(fgets($fp));
    $len = strlen($S);
    $arr = array('A' => 0, 'B' => 0, 'C' => 0, 'D' => 0, 'E' => 0, 'F' => 0);
    $arrKey = array_keys($arr);

    for ($i = 0; $i < $len; $i++) {
        if (in_array($S[$i], $arrKey)) {
            $arr[$S[$i]]++;
        }
    }

    ksort($arr);

    echo implode(" ", $arr) . PHP_EOL;

<?php
    /*
        Problem URL : http://abc032.contest.atcoder.jp/tasks/abc032_b

        Result : AC
        Time   : 53ms
        Memory : 4560KB
     */

    $fp = fopen("php://stdin", "r+");
    $s = trim(fgets($fp));
    $k = trim(fgets($fp));
    $l = strlen($s);

    $arr = array();

    for ($i = 0; $i < $l - $k + 1; $i++)
    {
        $tmp = substr($s, $i, $k);
        $arr[$tmp] = 1;
    }

    echo count($arr) . PHP_EOL;

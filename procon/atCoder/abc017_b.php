<?php
    /*
        Problem URL : https://abc017.contest.atcoder.jp/tasks/abc017_b

        Score  : 100
        Result : AC
        Time   : 55 ms
        Memory : 3800 KB
     */

    $fp = fopen("php://stdin", "r+");
    $X = trim(fgets($fp));
    $arr = array("ch", "o", "k", "u");

    while(true) {
        if ($X == "") {
            echo "YES\n";
            break;
        }

        $bool = FALSE;

        foreach ($arr as $v) {
            $tmp = substr($X, 0, strlen($v));

            if ($tmp == $v) {
                $X = substr($X, strlen($v));
                $bool = TRUE;
            }
        }
        if ($bool === FALSE) {
            echo "NO\n";
            break;
        }
    }

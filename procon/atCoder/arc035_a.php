<?php
    /*
        Problem URL : https://arc035.contest.atcoder.jp/tasks/arc035_a

        Score  : 100
        Result : AC
        Time   : 62 ms
        Memory : 4500 KB
     */

    $fp = fopen('php://stdin', 'r+');
    $s = trim(fgets($fp));
    $len_s = strlen($s);
    $answer = "";

    for ($i = 0; $i < ceil($len_s / 2); ++$i) {
        $strA = substr($s, $i, 1);
        $strB = substr($s, $len_s - $i - 1, 1);
        // echo "{$strA} {$strB}\n";
        if ($strA == "*" || $strB == "*" || $strA == $strB) {
        } else {
            $answer = "NO\n";
        }
    }

    echo $answer ?: "YES\n";

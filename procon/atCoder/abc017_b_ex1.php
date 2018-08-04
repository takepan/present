<?php
    /*
        Problem URL : https://abc017.contest.atcoder.jp/tasks/abc017_b

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $fp = fopen("php://stdin", "r+");
    $X = trim(fgets($fp));
    echo (preg_match("/^(ch|o|k|u)+$/", $X)) ? "YES\n" : "NO\n";

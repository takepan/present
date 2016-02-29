<?php
    /*
        Problem URL : http://abc023.contest.atcoder.jp/tasks/abc023_a

        Result : AC
        Time   : 57 ms
        Memory : 4500 KB
     */

    $fp = fopen("php://stdin", "r+");
    $X = trim(fgets($fp));
    $answer = 0;

    for ($i = 0; $i < strlen($X); $i++) {
        $answer += substr($X, $i, 1);
    }

    echo $answer . PHP_EOL;

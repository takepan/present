<?php
    /*
        Problem URL : http://abc019.contest.atcoder.jp/tasks/abc019_2

        Score  : 100
        Result : AC
        Time   : 53 ms
        Memory : 3764 KB
     */

    $fp = fopen("php://stdin", "r+");
    $S = trim(fgets($fp));
    $lenS = strlen($S);
    $tmpS = '';
    $prvS = '';
    $ansS = "";
    $cnt = 0;

    for ($i = 0; $i < $lenS; $i++) {
        $tmpS = substr($S, $i, 1);
        if ($tmpS != $prvS) {
            // 違う場合
            if ($prvS != '') {
                $ansS .= $prvS;
                $ansS .= (string) $cnt;
            }
            $prvS = $tmpS;
            $cnt = 1;
        } else {
            $cnt++;
        }
    }

    $ansS .= $prvS;
    $ansS .= (string) $cnt;

    echo $ansS . "\n";


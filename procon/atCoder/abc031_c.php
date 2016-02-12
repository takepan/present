<?php
    /*
        Problem URL : http://abc031.contest.atcoder.jp/tasks/abc031_c

        Result : AC
        Time   : 67 ms
        Memory : 4528 KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    $a = explode(" ", trim(fgets($fp)));
    $len = count($a);

    $score_tak = -99999999;
    $ans = -99999999;
    for ($tak = 0; $tak < $len; $tak++) {
        $score_aok = -99999999;
        // echo "****************\n";
        for ($aok = 0; $aok < $len; $aok++) {
            if ($tak == $aok) continue;
            $memo_tak = 0;
            $memo_aok = 0;
            $mi = min($tak, $aok);
            $ma = max($tak, $aok);
            // echo "FROM: {$mi} TO: {$ma} ";
            for ($cur = $mi; $cur <= $ma; $cur++) {
                if (($cur - $mi + 1) % 2 == 1) {
                    $memo_tak += $a[$cur];
                } else {
                    $memo_aok += $a[$cur];
                }
            }
            // echo "tak: {$memo_tak} aok: {$memo_aok} ";
            if ($memo_aok > $score_aok) {
                // echo " ( NICE SCORE ) ";
                $score_aok = $memo_aok;
                $score_tak = $memo_tak;
            }
            // echo "memo_aok: {$memo_aok}\n";
        }

        if ($score_tak > $ans) {
            $ans = $score_tak;
        }
        // echo "ans: {$ans}\n";
    }
    echo $ans . PHP_EOL;

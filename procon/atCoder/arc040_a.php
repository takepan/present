<?php
    /*
        Problem URL : http://arc040.contest.atcoder.jp/tasks/arc040_a

        Score  : 100
        Result : AC
        Time   : 62 ms
        Memory : 4552 KB
     */

    $S = "";
    $scoreT = 0;
    $scoreA = 0;

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; $i++) {
        $S = trim(fgets($fp));
        for ($j = 0; $j < $N; $j++) {
            $str = substr($S, $j, 1);
            switch ($str) {
                case "R":
                    $scoreT++;
                    break;

                case "B":
                    $scoreA++;
                    break;
            }
        }
    }

    // echo "{$scoreT} {$scoreA}\n";

    if ($scoreT > $scoreA) echo "TAKAHASHI\n";
    if ($scoreT < $scoreA) echo "AOKI\n";
    if ($scoreT == $scoreA) echo "DRAW\n";

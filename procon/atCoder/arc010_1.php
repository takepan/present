<?php
    /*
        Problem URL : http://arc010.contest.atcoder.jp/tasks/arc010_1

        Score  : 100
        Result : AC
        Time   : 63 ms
        Memory : 3832 KB
     */

    list($N, $M, $A, $B) = explode(' ', trim(fgets(STDIN)));
    for ($i = 0; $i < $M; $i++) {

        // 朝の時点で不足していたら補充
        if ($N <= $A) {
            $N += $B;
            $bool = true;
        }

        fscanf(STDIN, "%d", $c);
        $N -= $c;
        if ($N < 0) {
            exit(($i + 1) . "\n");
        }

    }
    echo "complete\n";

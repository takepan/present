<?php
    /*
        Problem URL : http://arc051.contest.atcoder.jp/tasks/arc051_b

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    euc($N);

    function euc($a) {
        $y = 2;
        $x = 1;
        for ($i = 1; $i < $a; $i++) {
            $z = $y;
            $y = $x + $y;
            $x = $z;
        }
        echo "{$y} {$x}\n";
    }

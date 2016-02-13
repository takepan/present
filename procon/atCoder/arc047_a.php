<?php
    /*
        Problem URL : http://arc047.contest.atcoder.jp/tasks/arc047_a

        Result : AC
        Time   : 130 ms
        Memory : 4752 KB
     */

    // Here your code !
    $fp = fopen("php://stdin", "r+");

    list($N, $L) = explode(" ", trim(fgets($fp)));
    $S = trim(fgets($fp));

    $ans = 0;
    $cur = 1;

    for ($i = 0; $i < $N; $i++) {
        switch(substr($S, $i, 1)) {
            case "+":
                $cur++;
                //echo "current tabs : {$cur}\n";
                if ($cur > $L) {
                    $cur = 1;
                    $ans++;
                }
                break;
                
            case "-":
                $cur--;
                //echo "current tabs : {$cur}\n";
                break;
        }
    }

    echo $ans . PHP_EOL;

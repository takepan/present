<?php
    /*
        Problem URL : http://arc032.contest.atcoder.jp/tasks/arc032_1

        Score  : 100
        Result : AC
        Time   : 51 ms
        Memory : 3820 KB
     */

    $num = 0;

    $fp = fopen('php://stdin', 'r+');
    $n = trim(fgets($fp));
    for ($i = 0; $i < $n; ++$i) {
        $num += ($i + 1);
    }

    // echo "\$num : {$num} \n";

    // $bool : TRUE 素数でない   FALSE 素数である

    if ($num == 1) {
        echo "BOWWOW\n";
        exit;
    }
    $bool = FALSE;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $bool = TRUE;
        }
    }

    echo ($bool === TRUE) ? "BOWWOW" : "WANWAN";
    echo "\n";

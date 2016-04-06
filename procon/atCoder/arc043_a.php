<?php
    /*
        Problem URL : https://arc043.contest.atcoder.jp/tasks/arc043_a

        Score  : 100
        Result : AC
        Time   : 276 ms
        Memory : 22280 KB
     */

    $fp = fopen("php://stdin", "r+");
    list($N, $A, $B) = explode(" ", trim(fgets($fp)));
    for ($i = 0; $i < $N; $i++) {
        $S[$i] = trim(fgets($fp));
    }
    // var_dump($S);
    $total = array_sum($S);
    // echo "total: " . $total . PHP_EOL;
    $t_min = min($S);
    // echo "t_min: " . $t_min . PHP_EOL;
    $t_max = max($S);
    // echo "t_max: " . $t_max . PHP_EOL;
    $t_dif = $t_max - $t_min;
    $t_avg = $total / $N;
    // echo $t_avg . PHP_EOL;

    if ($t_dif == 0) {
        $ratio = 1;
    } else {
        $ratio = $B / $t_dif;
    }

    if ($ratio == 1 && $B != 0 ) {
        echo "-1" . PHP_EOL;
    } else {
        echo $ratio . " " . ($A - $t_avg * $ratio) . PHP_EOL;
    }

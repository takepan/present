<?php
    /*
        Problem URL : http://arc049.contest.atcoder.jp/tasks/arc049_b

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $x = array();
    $y = array();
    $c = array();

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; $i++) {
        list($x[], $y[], $c[]) = explode(" ", trim(fgets($fp)));
    }

    $min_x = min($x);
    $max_x = max($x);
    $min_y = min($y);
    $max_y = max($y);
    $dist_x = $max_x - $min_x;
    $dist_y = $max_y - $min_y;

    echo (max($dist_x, $dist_y) / 2) . PHP_EOL;

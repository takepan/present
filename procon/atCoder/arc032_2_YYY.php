<?php
    /*
        Problem URL : http://arc032.contest.atcoder.jp/tasks/arc032_2

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $answer = 0;
    $arr = array();
    $arr2 = array();

    $fp = fopen('php://stdin', 'r+');
    list($N, $M) = explode(' ', trim(fgets($fp)));
    for ($i = 0; $i < $N; $i++) {
        $arr[$i+1] = $i + 1;
    }

    for ($i = 0; $i < $M; $i++) {
        list($a, $b) = explode(' ', trim(fgets($fp)));
        $k = sprintf("%06d-%06d", $a, $b);
        $arr2[] = $k;
    }

    sort($arr2);
    var_dump($arr2);

    foreach ($arr2 as $k) {
        list($x, $y) = explode("-", $k);
        $x  = (int) $x;
        $y  = (int) $y;
        echo "{$x}-{$y}\n";
        $m = min($arr[$x], $arr[$y]);
        $arr[$x] = $m;
        $arr[$y] = $m;
        var_dump($arr);
    }

    // var_dump($arr);
    $arr = array_flip($arr);
    // echo "\narray_flip\n\n";
    // var_dump($arr);

    $answer = count($arr) - 1;

    echo $answer . PHP_EOL;

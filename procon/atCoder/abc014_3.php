<?php
    /*
        Problem URL : http://abc014.contest.atcoder.jp/tasks/abc014_3

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    $arr = array();

    fscanf(STDIN, "%d\n", $n);
    for ($i = 0; $i < $n; $i++) {
        fscanf(STDIN, "%d %d\n", $a, $b);
        $arr[$a]++;
        $arr[$b+1] -= 1;
    }

    ksort($arr);
    // var_dump($arr);

    $num = 0;
    $ans = 0;
    foreach ($arr as $k => $v) {
        // echo "{$k} -> {$v}\n";
        $num += $v;
        // echo $num . PHP_EOL;
        $ans = max($ans, $num);
    }

    echo $ans . PHP_EOL;

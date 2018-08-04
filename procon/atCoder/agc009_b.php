<?php
    /*
        Problem URL : http://agc009.contest.atcoder.jp/tasks/agc009_b
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
    // define('DEBUG', true);
    define('DEBUG', false);

    $ans = 0;
    $arr = array();

    fscanf(STDIN, "%d", $N);

    // そもそもの最低
    $mmin = ceil(log($N, 2));

    for ($i = 0; $i < $N-1; $i++) {
        fscanf(STDIN, "%d", $a);
        echo "a:{$a}\n";
        $arr[$a]++;
    }
    var_dump($arr);
    foreach ($arr as $k => $v) {
        $sum[$v]++;
    }

    $a1 = $arr[1];

    foreach ($sum as $k => $v) {
        $tmp = $k + ceil(log($v, 2));
        echo "tmp:{$tmp}\n";
        if ($k != $a1) {
            $tmp++;
        }
        $ans = max($ans, $tmp);
    }

    krsort($sum);

    var_dump($sum);
    // exit;

    echo "a1: " . $a1 . PHP_EOL;
    unset($arr[1]);
    $amax = max($arr) + 1;
    echo $ans . PHP_EOL;

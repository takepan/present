<?php
    ini_set('display_errors', 'On');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    // define('DEBUG', true);
    // define('DEBUG', false);

    fscanf(STDIN, "%d %d %d", $u, $p, $b);

    fscanf(STDIN, "%d", $n);

    $ans1 = 0;
    $ans2 = 0;

    $arr = array();
    for ($i = 0; $i < $n; $i++) {
        fscanf(STDIN, "%d %s", $arr[$i]['cost'], $arr[$i]['device']);
    }
    // var_dump($arr);

    function sorty($key) {
        return function ($a, $b) use ($key) {
            return ($a[$key] > $b[$key]);
        };
    }
    usort($arr, sorty('cost'));

    foreach ($arr as $k => $v) {
        switch ($v['device']) {
            case "USB":
                if ($u > 0) {
                    $ans1++;
                    $ans2 += $v['cost'];
                    $u--;
                } elseif ($b > 0) {
                    $ans1++;
                    $ans2 += $v['cost'];
                    $b--;
                }
                break;
            case "PS/2":
                if ($p > 0) {
                    $ans1++;
                    $ans2 += $v['cost'];
                    $p--;
                } elseif ($b > 0) {
                    $ans1++;
                    $ans2 += $v['cost'];
                    $b--;
                }
                break;
        }
        // echo "{$ans1} {$ans2} {$u} {$p} {$b}"; 
        // echo "\n";
    }
    echo "{$ans1} {$ans2}"; 
    // echo "\n";
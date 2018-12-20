<?php
    fscanf(STDIN, "%d", $N);
    $a = str_split($N);
    $ans = 0;
    $tmp = 0;
    $next_flag = true;
    for ($i = 1; $i < count($a); $i++) {
        $ans += pow(3, $i);
        echo $ans . PHP_EOL;
    }
    foreach ($a as $k => $v) {
        $ext = $k === count($a) - 1;
        $tmp *= 3;
        if ($next_flag === true) {
            if ($v > 7 - $ext) {
                $tmp += 3;
            } elseif ($v > 5 - $ext) {
                $tmp += 2;
            } elseif ($v > 3 - $ext) {
                $tmp += 1;
            }
            $next_flag = ($v == 3 || $v == 5 || $v == 7);
        }
//        echo $tmp . PHP_EOL;
    }
    echo $ans . PHP_EOL;
    echo $tmp . PHP_EOL;

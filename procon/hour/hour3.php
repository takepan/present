<?php
    $ans = array();

    $num = 100;

    for ($i = 0; $i < $num; $i++) {
        if ($i <= 1) {
            $ans[$i] = $i;
        } else {
            $ans[$i] = $ans[$i - 2] + $ans[$i - 1];
        }
    }

    echo implode(" ", $ans) . PHP_EOL;

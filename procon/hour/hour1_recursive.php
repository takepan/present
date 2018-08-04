<?php
    $a = array(1, 23, 456, 7890);

    echo calc($a) . PHP_EOL;

    function calc($arr) {
        $ans = 0;

        if ($arr) {
            $ans += array_shift($arr);
            return $ans + calc($arr);
        } else {
            return $ans;
        }

    }

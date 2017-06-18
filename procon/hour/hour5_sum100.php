<?php
    $loop = pow(3, 8);
    $m = array("", "+", "-");
    for ($i = 0; $i < $loop; $i++) {
        $b = implode(base3($i));
        // echo $b . PHP_EOL;

        $f = "";
        for ($j = 1; $j <= 9; $j++) {
            if ($j == 9) {
                $f .= $j;
            } else {
                $f .= $j . $m[$b[$j-1]];
            }
        }

        eval("\$x = {$f};");
        if ($x == 100) {
            echo $f . PHP_EOL;
        }
    }

    function base3($n) {
        $arr = array();

        for ($i = 0; $i < 8; $i++) {
            $arr[$i] = $n % 3;
            $n -= $arr[$i];
            $n /= 3;
        }
        return $arr;
    }
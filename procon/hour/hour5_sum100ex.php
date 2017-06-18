<?php
    $m = array("", "+", "-", "*", "/");
    $m_cnt = count($m);

    $loop = pow($m_cnt, 8);
    for ($i = 0; $i < $loop; $i++) {
        $b = implode(basex($m_cnt, $i));
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

    function basex($m_cnt, $n) {
        $arr = array();

        for ($i = 0; $i < 8; $i++) {
            $arr[$i] = $n % $m_cnt;
            $n -= $arr[$i];
            $n /= $m_cnt;
        }
        return $arr;
    }
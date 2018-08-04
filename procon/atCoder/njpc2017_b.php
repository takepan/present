<?php
    fscanf(STDIN, "%d %d %d", $H, $W, $N);
    $ans = ($H-1) * $W + $H * ($W-1);

    // echo $ans . PHP_EOL;

    $sum = array();
    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d %d", $r, $c);
        $sum[$r][$c] = 1;
    }

    $dely = array();
    $delt = array();
    foreach ($sum as $r => $v) {
        foreach ($v as $c => $dummy) {
            if ($r != 1) {
                if (!isset($del[$r][$c])) {
                    $delt[$r][$c]++;
                }
            }
            if ($c != 1) {
                if (!isset($del[$r][$c])) {
                    $dely[$r][$c]++;
                }                
            }
            if ($c != $W) {
               if (!isset($del[$r][$c+1])) {
                    $dely[$r][$c+1]++;
                }
            }
            if ($r != $H) {
                if (!isset($del[$r+1][$c])) {
                    $delt[$r+1][$c]++;
                }
            }
        }
    }


    foreach ($delt as $k1 => $v1) {
        foreach ($v1 as $k2 => $v2) {
            $ans--;
        }
    }
    foreach ($dely as $k1 => $v1) {
        foreach ($v1 as $k2 => $v2) {
            $ans--;
        }
    }

    echo $ans . PHP_EOL;
    

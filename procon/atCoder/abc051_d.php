<?php
    fscanf(STDIN, "%d %d", $n, $m);

    for ($i = 0; $i < $m; $i++) {
        fscanf(STDIN, "%d %d %d", $a[$i], $b[$i], $c[$i]);
        $a[$i]--;
        $b[$i]--;
    }

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j) {
                $dist[$i][$j] = 0;
            } else {
                $dist[$i][$j] = PHP_INT_MAX;
            }
        }
    }

    for ($i = 0; $i < $m; $i++) {
        $dist[$a[$i]][$b[$i]] = min($dist[$a[$i]][$b[$i]], $c[$i]);
        $dist[$b[$i]][$a[$i]] = min($dist[$b[$i]][$a[$i]], $c[$i]);
    }

    for ($k = 0; $k < $n; $k++) {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $dist[$i][$j] = min($dist[$i][$j], $dist[$i][$k] + $dist[$k][$j]);
            }
        }
    }

    $ans = $m;

    for ($i = 0; $i < $m; $i++) {
        $shortest = false;
        for ($j = 0; $j < $n; $j++) {
            if ($dist[$j][$a[$i]] + $c[$i] == $dist[$j][$b[$i]]) {
                $shortest = true;

            }
        }
        if ($shortest === true) {
            $ans--;
        }        
    }

    echo $ans . PHP_EOL;
    
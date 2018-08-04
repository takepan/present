<?php
    fscanf(STDIN, "%d %d", $mmin, $mmax);
    $start = 2;
    while (true) {
        $mmin1 = ceil($mmin / $start);
        $mmax1 = floor($mmax / $start);
        $num = $mmax1 - $mmin1;
        // printf("%d %d\n", $start, $num);
        if (!isset($nnum)) {
            $nnum = $num;
        } else {
            if ($nnum > $num) {
                echo $start - 1;
                echo PHP_EOL;
                exit;
            }
        }
        $start++;
    }

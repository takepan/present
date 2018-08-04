<?php
    fscanf(STDIN, "%d %d", $n, $k);

    $t = 240 - $k;
    $p = 5;
    $ans = 0;

    while ($t >= $p && $n > 0) {
        $ans++;
        $n--;
        $t -= $p;
        $p += 5;
    }

    echo $ans;

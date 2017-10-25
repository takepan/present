<?php

    fscanf(STDIN, "%d %d", $N, $K);
    for($i = 0; $i < $N; $i++ ) fscanf(STDIN, "%d %d", $X[$i], $Y[$i]);

    $xx = $yy = array();
    for($i = 0; $i < $N ; $i++) $xx[] = ($X[$i]);
    for($i = 0; $i < $N ; $i++) $yy[] = ($Y[$i]);

    $ans = -1;

    foreach ($xx as $sx) {
        foreach ($yy as $sy) {
            foreach ($xx as $tx) {
                foreach ($yy as $ty) {
                    if ($sx <= $tx and $sy <= $ty) {
                        $sm = 1 * ($tx - $sx) * ($ty - $sy);

                        $c = 0;
                        for($i = 0; $i < $N; $i++) if ($sx <= $X[$i] && $X[$i] <= $tx && $sy <= $Y[$i] && $Y[$i] <= $ty) $c++;
                        if ($K <= $c) {
                            if ($ans < 0) $ans = $sm;
                            $ans = min($ans, $sm);
                        }
                    }
                }
            }
        }
    }

    echo $ans . PHP_EOL;

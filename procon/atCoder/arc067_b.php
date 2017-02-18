<?php
    fscanf(STDIN, "%d %d %d", $N, $A, $B);
    $x = explode(" ", trim(fgets(STDIN)));
    $ans = 0;

    for ($i = 0; $i < $N-1; $i++) {
        $dist = $x[$i+1] - $x[$i];
        if ($dist * $A > $B) {
            $ans += $B;
        } else {
            $ans += $dist * $A;
        }
    }

    echo $ans . PHP_EOL;

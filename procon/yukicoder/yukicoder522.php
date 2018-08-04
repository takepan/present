<?php
    fscanf (STDIN, "%d", $N);
    $a = 1;
    $b = 1;
    $c = $N - 2;

    while (true) {
        printf("%d %d %d\n", $a, $b, $c);
        if ($b + 2 <= $c) {
            $c--;
            $b++;
        } else {
            $a++;
            $b = $a;
            $c = $N - $a * 2;
        }
        if (($a > $b) || ($b > $c)) exit;
    }

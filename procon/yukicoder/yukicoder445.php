<?php
    fscanf (STDIN, "%d %d", $N, $K);

    $a = 50 * $N;
    $b = floor(50 * $N / (.8 + .2 * $K));
    echo ($a + $b) . "\n";

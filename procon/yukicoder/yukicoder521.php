<?php
    fscanf (STDIN, "%d %d", $N, $M);
    if ($M == 0) exit("0\n");
    if ($M > $N) exit("0\n");
    if ($N + 1 == $M * 2) {
        echo ($N - 1) . PHP_EOL;
        exit;
    }
    echo ($N - 2) . PHP_EOL;

<?php
    // $a = microtime(true);

    fscanf (STDIN, "%d", $N);
    $ans = 1;
    for ($i = 2; $i <= $N * 2; $i++) {
        if ($i % 2 == 0) {
            $ans *= ($i / 2);
        } else {
            $ans *= $i;
        }
        $ans %= 1000000007;
    }
    echo $ans . PHP_EOL;

    // $b = microtime(true);
    // echo ($b - $a) . PHP_EOL;

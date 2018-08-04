<?php

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d %d", $Q, $H, $S, $D);
fscanf(STDIN, "%d", $N);

$lit1 = min($Q * 4, $H * 2, $S);

if ($lit1 < $D / 2) {
    // $lit1ベースで買った方が安い
    ans($N * $lit1);
} else {
    if ($N % 2 == 0) {
        ans($N / 2 * $D);
    } else {
        ans(($N - 1) / 2 * $D + $lit1);
        // exit("$N $D $lit1\n");
    }
}

function ans($ans) {
    printf("%d\n", $ans);
}
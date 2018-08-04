<?php
    fscanf(STDIN, "%d\n", $n);
    $a = explode(" ", trim(fgets(STDIN)));

    $score_a = 0;
    $score_b = 0;

    $tmp = 0;

    for ($i = 0; $i < $n; $i++) {
        $tmp += $a[$i];
        if ($i % 2 == 0) {
            if ($tmp >= 0) {
                $score_a += $tmp + 1;
                $tmp -= ($tmp + 1);
            }
        } else {
            if ($tmp <= 0) {
                $score_a += -($tmp - 1);
                $tmp += -($tmp - 1);
            }
        }
    }

    $tmp = 0;

    for ($i = 0; $i < $n; $i++) {
        $tmp += $a[$i];
        if ($i % 2 != 0) {
            if ($tmp >= 0) {
                $score_b += $tmp + 1;
                $tmp -= ($tmp + 1);
            }
        } else {
            if ($tmp <= 0) {
                $score_b += -($tmp - 1);
                $tmp += -($tmp - 1);
            }
        }
    }

    echo min($score_a, $score_b) . PHP_EOL;

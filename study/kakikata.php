<?php

    $a = 0;
    $prev = 0;
    $diff = 0;

    for ($i = 0; $i < 10; $i++) {
        $a += $i;
        if (($diff = $a - $prev) < 5) {
            echo "small\n";
        } else {
            echo "big\n";
        }
        echo $diff . PHP_EOL;
        echo PHP_EOL;

        $prev = $a;
    }

    var_dump(range(0,44));

<?php
    // define ('DEBUG', true);
    define ('DEBUG', false);

    fscanf(STDIN, "%d", $N);
    $x = trim(fgets(STDIN));
    if (DEBUG) echo $x . PHP_EOL;
    $A = explode(" ", $x);
    if (DEBUG) echo $N . PHP_EOL;
    // if (DEBUG) var_dump($A);

    $total = array_sum($A);
    if (DEBUG) echo "total:{$total}\n";
    $one = (1 + $N) * $N / 2;
    if (DEBUG) echo "one:{$one}\n";
    $round = $total / $one;
    $round_x = $round;
    if (floor($round) != $round) {
        echo "NO\n";
        exit;
    }

    $A[] = $A[0];
    for ($i = 0; $i < $N; $i++) {
        $diff = $A[$i+1] - $A[$i] - $round;
        if (DEBUG) echo $diff . PHP_EOL;
        if ($diff >= 0) {
            if (DEBUG) echo "o";
        } else {
            if (DEBUG) echo "x {$diff}\n";
            $kaisuu = $diff / $N;
            $round_x += $kaisuu;
            if (DEBUG) echo "kaisuu:{$kaisuu}\n";
        }
    }
    // var_dump($A);

    if ($round_x == 0) {
        echo "YES\n";
    } else {
        echo "NO\n";
    }


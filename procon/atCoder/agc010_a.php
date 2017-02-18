<?php
    // define ('DEBUG', true);
    define ('DEBUG', false);

    fscanf(STDIN, "%d", $N);
    $x = trim(fgets(STDIN));
    if (DEBUG) echo $x . PHP_EOL;
    $A = explode(" ", $x);
    if (DEBUG) echo $N . PHP_EOL;
    if (DEBUG) var_dump($A);
    $e = 0;
    $o = 0;

    for ($i = 0; $i < $N; $i++) {
        if ($A[$i] % 2 == 0) {
            $e++;
        } else {
            $o++;
        }
    }

    if (DEBUG) echo "e:{$e} o:{$o}\n";

    if ($e > 1) {
        $e = 1;
    }
    $o %= 2;
    if ($e == 1 && $o == 1) {
        echo "NO\n";
    } else {
        echo "YES\n";
    }



<?php
    // define('SIM', true);
    define('SIM', false);

    $ansX = rand(0, 100000);
    $ansY = rand(0, 100000);
    if (SIM) echo "ansX:{$ansX} ansY:{$ansY}\n";

    solve();

    function answer($x, $y) {
        global $ansX, $ansY;
        $ret = abs($x - $ansX) + abs($y - $ansY);
        if (SIM) echo "ret:{$ret}\n";
        return $ret;
    }

    function solve() {

        $X = 0;
        $Y = 0;
        $SZ = 100000;

        echo "{$X} {$Y}\n";

        if (SIM) {
            $ans1 = answer($X, $Y);
        } else {
            fscanf(STDIN, "%d", $ans1);
        }

        if ($ans1 <= $SZ) {
            $X = $ans1;
            $Y = 0;
        } else {
            $X = $SZ;
            $Y = $ans1 - $SZ;
        }

        echo "{$X} {$Y}\n";

        if (SIM) {
            $ans2 = answer($X, $Y);
        } else {
            fscanf(STDIN, "%d", $ans2);
        }

        $X = $X - $ans2 / 2;
        $Y = $Y + $ans2 / 2;

        echo "{$X} {$Y}\n";

        if (SIM) {
            $ans3 = answer($X, $Y);
            echo $ans3;
        } else {

        }

    }

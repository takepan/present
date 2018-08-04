<?php

    define('DEBUG', false);
    // define('DEBUG', true);

    fscanf(STDIN, "%d", $n);
    $S = explode(" ", trim(fgets(STDIN)));
    fscanf(STDIN, "%d", $q);
    $T = explode(" ", trim(fgets(STDIN)));

    $ans = 0;
    for ($i = 0; $i < $q; $i++) {
        if (search($n, $S, $T[$i])) {
            $ans++;
            if (DEBUG) echo $T[$i] . "found\n";
        } else {
            if (DEBUG) echo $T[$i] . "not found\n";
        }
    }
    echo $ans . PHP_EOL;

    function search($n, $S, $a) {
        $ret = null;

        $l = 0;
        $r = $n-1;
        if ($S[$l] == $a || $S[$r] == $a) {
            return true;
        }

        while(is_null($ret)) {
            $m = ceil(($l + $r) / 2);
            if ($l == $m || $r == $m) {
                return false;
            }

            // if (DEBUG) echo "l:{$l} r:{$r} m:{$m}\n";

            if ($S[$m] == $a) {
                return true;
            } elseif ($S[$m] > $a) {
                $r = $m;
            } else {
                $l = $m;
            }
        }
    }

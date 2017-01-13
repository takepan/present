<?php

    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('memory_limit', '512M');

    define('MMAX', pow(10, 5));

    // define('DEBUG', true);
    define('DEBUG', false);

    $arrP = array();

    $rt = floor(sqrt(MMAX));
    for ($i = 2; $i < MMAX; $i++) {
        if (isset($arrP[$i])) continue;
        // echo "{$i} ";
        $arrP[$i][] = $i;
        $loop = floor(MMAX / $i);
        for ($j = 2; $j <= $loop; $j++) {
            $arrP[$i*$j][] = $i;
        }
    }
    for ($i = 4; $i <= MMAX; $i++) {
        if (!isset($arrP[$i])) {
            $arrP[$i][] = $i;
        }
    }

    if (DEBUG) {
        $tm1 = microtime(true);
    }

    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));
    // var_dump($a);

    // for TEST
    // $a = range(1, 100000);
    // $N = count($a);

    $sum = array(1 => 1);

    for ($i = 0; $i < $N; $i++) {
        // echo "\nRET:\n";
        // var_dump($ret);
        if (DEBUG) var_dump($arrP[$a[$i]]);
        if (is_array($arrP[$a[$i]])) {
            $cnt = count($arrP[$a[$i]]);
            for ($j = 0; $j < $cnt; $j++) {
                $sum[$arrP[$a[$i]][$j]]++;
            }
        }
    }

    // var_dump($sum);
    // echo "answer:";

    echo max($sum);

    if (DEBUG) {
        $tm2 = microtime(true);
        echo PHP_EOL . "Time: " . ($tm2 - $tm1);
    }

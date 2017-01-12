<?php
    // $tm1 = microtime(true);

    $erat = array();
    $arrP = array();
    define('MMAX', pow(10, 5));
    for ($i = 2; $i <= sqrt(MMAX); $i++) {
        $erat[$i] = 1;
    }
    for ($i = 2; $i <= sqrt(MMAX); $i++) {
        for ($j = 2; $j <= sqrt(MMAX); $j++) {
            unset($erat[$i*$j]);
        }
    }
    $arrP = array_keys($erat);

    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));
    // $a = range(1, 100000);
    $cnt = count($a);
    $sum = array(1 => 1);

    for ($i = 0; $i < $cnt; $i++) {
        foreach ($arrP as $pnum) {
            // echo "{$a[$i]} {$pnum}\n";
            // if ($pnum > $a[$i]) break;
            if ($a[$i] % $pnum == 0) {
                $sum[$pnum]++;
            }
        }
    }

    // var_dump($sum);

    echo max($sum);

    // $tm2 = microtime(true);

    // echo PHP_EOL . ($tm2 - $tm1);


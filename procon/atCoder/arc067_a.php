<?php
    fscanf(STDIN, "%d", $N);

    define('MOD', pow(10,9) + 7);

    $p = array();

    for ($i = 2; $i <= 1000; $i++) {
        $p[$i] = 1;
    }

    for ($i = 2; $i <= 1000; $i++) {
        if ($p[$i] == 1) {
            $loop = 1000 / $i;
            for ($j = 2; $j <= $loop; $j++) {
                $p[$i*$j] = 0;
            }
        }
    }

    // for ($i = 2; $i < 1000; $i++) {
    //     if ($p[$i]) echo $i . PHP_EOL;
    // }

    for ($i = $N; $i > 1; $i--) {
        $tmp = $i;
        for ($j = 2; $j <= $i; $j++) {
            if ($p[$j] == 0) continue;
            while ($tmp % $j == 0) {
                // echo $tmp . " " . $j . " ";
                $sum[$j]++;
                $tmp /= $j;
            }
        }
    }

    // var_dump($sum);

    $ans = 1;

    if (is_array($sum)) {
        foreach ($sum as $v) {
            $ans *= ($v + 1);
            $ans %= MOD;
        }        
    }

    echo $ans . PHP_EOL;
    
<?php
    // ini_set('display_errors', 'On');
    // ini_set('error_reporting', E_ALL & ~E_NOTICE);

    // // define('DEBUG', true);
    // define('DEBUG', false);

    fscanf(STDIN, "%d %d", $n, $k);

    $sqrt = bcsqrt($n);
    for ($i = 1; $i <= $sqrt; $i++) {
        if (bcmod($n, $i) == 0) {
            $arr[] = $i;
            $arr[] = bcdiv($n, $i);
        }
    }

    $arr = array_unique($arr);
    sort($arr);
    // var_dump($arr);

    if (isset($arr[$k-1])) {
        echo $arr[$k-1];
    } else {
        echo "-1";
    }

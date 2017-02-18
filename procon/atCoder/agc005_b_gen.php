<?php
    $num = 200000;

    $fp = fopen(__DIR__ . "/agc005_b_{$num}.dat", "w+");

    fputs($fp, $num . "\n");

    $arr = range(1, $num);

    shuffle($arr);

    fputs($fp, implode(" ", $arr));

    fclose($fp);
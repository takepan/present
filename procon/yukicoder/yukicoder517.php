<?php

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    $arr = array();
    $cnt = 0;

    fscanf (STDIN, "%d", $N);

    for ($i = 0; $i < $N; $i++) {
        fscanf (STDIN, "%s", $A);
        $aa = str_split($A);
        $cnt += count($aa);
        for ($j = 0; $j < count($aa) - 1; $j++) {
            $arr[$aa[$j+1]]['prev'] = $aa[$j];
            $arr[$aa[$j]]['next'] = $aa[$j+1];
        }
    }

    fscanf (STDIN, "%d", $M);

    for ($i = 0; $i < $M; $i++) {
        fscanf (STDIN, "%s", $B);
        $bb = str_split($B);
        for ($j = 0; $j < count($bb) - 1; $j++) {
            $arr[$bb[$j+1]]['prev'] = $bb[$j];
            $arr[$bb[$j]]['next'] = $bb[$j+1];

        }
    }

    foreach ($arr as $alphabet => $val) {
        if (!isset($val['prev'])) {
            $moji = $alphabet;
        }
    }

    $ans = $moji;

    while (true) {
        if (!isset($arr[$moji]['next'])) break;
        $moji = $arr[$moji]['next'];
        $ans .= $moji;
    }

    if ($cnt == 1) {
        echo $A . PHP_EOL;
    } elseif (strlen($ans) != $cnt) {
        // echo strlen($ans) . " != " . $cnt . PHP_EOL;
        echo "-1\n";
    } else {
        echo $ans . PHP_EOL;
    }


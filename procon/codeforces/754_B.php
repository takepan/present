<?php
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    for ($i = 0; $i < 4; $i++) {
        fscanf(STDIN, "%s", $m[$i]);
    }

    $t = array();

    // 縦
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $t[$i + 10] .= $m[$i][$j];
            $t[$i + 30] .= $m[$j][$i];
            $t[$i + $j + 50] .= $m[$i][$j];
            $t[$i - $j + 70] .= $m[$i][$j];
        }
    }

    // var_dump($t);

    foreach ($t as $k => $v) {
        if (preg_match("/(\.xx|xx\.|x\.x)/", $v)) {
            echo "YES";
            // echo $v;
            exit;
        }
    }
    echo "NO";

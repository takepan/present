<?php
    // define('DEBUG', true);
    define('DEBUG', false);

    fscanf(STDIN, "%d", $n);

    $pos = 0;
    $arr = array();
    $arrDiv = array('1' => 0, '2' => 0);
    $divMax = 0;
    $div1MinRate = PHP_INT_MAX;
    $div2MaxRate = -PHP_INT_MAX;

    for ($i = 0; $i < $n; $i++) {
        fscanf(STDIN, "%d %d", $chg, $div);

        if (isset($arr[$pos])) {
            if ($arr[$pos] != $div) {
                echo "Impossible";
                exit;
            }
        } else {
            $arr[$pos] = $div;
        }

        $pos += $chg;

        $arrDiv[$div]++;
    }

    if ($arrDiv[2] == 0) {
        echo "Infinity";
        exit;
    }

    krsort($arr);
    if (DEBUG) var_dump($arr);

    foreach ($arr as $k => $div) {
        if ($div == "1") {
            $div1MinRate = min($div1MinRate, $k);
        }
        if ($div == "2") {
            $div2MaxRate = max($div2MaxRate, $k);
        }

    }

    if ($div1MinRate <= $div2MaxRate) {
        echo "Impossible";
        exit;
    }

    if (DEBUG) echo $div2MaxRate . PHP_EOL;
    $baseRate = 1899 - $div2MaxRate;
    if (DEBUG) echo $baseRate . PHP_EOL;

    echo $baseRate + $pos;
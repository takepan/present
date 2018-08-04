<?php
    while(true) {
        fscanf(STDIN, "%d", $price);
        if ($price == 0) {
            exit;
        }

        $arr = array(500, 100, 50, 10, 5, 1);
        $chg = 1000 - $price;
        $ans = 0;

        foreach ($arr as $coin) {
            while($coin <= $chg) {
                $chg -= $coin;
                $ans++;
            }
        }

        echo $ans . PHP_EOL;
    }

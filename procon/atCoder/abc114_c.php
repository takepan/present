<?php
    $a = [];
    $tmp = [];
    for ($i = 3; $i <= 9; $i++) {
        for ($j = 0; $j < pow(3, $i); $j++) {
            $x = str_pad(trans($j, 3), $i, "0", STR_PAD_LEFT);
            $tmp[0] = substr_count($x, "0");
            $tmp[1] = substr_count($x, "1");
            $tmp[2] = substr_count($x, "2");
            if (min($tmp) === 0) continue;
            $y = str_replace("0", "3", $x);
            $y = str_replace("1", "5", $y);
            $y = str_replace("2", "7", $y);
            $a[] = intval($y);
        }
    }
    $a[] = pow(10, 9);
    
    fscanf(STDIN, "%d", $N);
    $ans = 0;
    $cnt = count($a);
    for ($i = 0; $i < $cnt; $i++) {
        if ($a[$i] <= $N) {
            $ans++;
        } else {
            break;
        }
    }
    echo $ans;

    function trans($x, $d) {
        $a = [];
        $keta = 1;
        while(true) {
            $amari = $x % $d;
            $x -= $amari;
            $a[] = $amari;
            $x /= $d;
            if ($x === 0) break;
        }
        return implode("", array_reverse($a));
    }

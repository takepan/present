<?php

    fscanf(STDIN, "%d", $N);

    $arrM = array_pad(array(), 7, 0);

    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d", $a);
        $arrM[$a % 7]++;
    }

    $ans = 0;
    $r = 0;

    for ($i = 0; $i < 7; $i++) {
        for ($j = $i; $j < 7; $j++) {
            for ($k = $j; $k < 7; $k++) {
                if (($i + $j + $k) % 7 == 0) {
                    $arrD = $arrM;
                    $x = $arrD[$i];
                    $arrD[$i]--;
                    $y = $arrD[$j];
                    $arrD[$j]--;
                    $z = $arrD[$k];
                    if ($x > 0 && $y > 0 && $z > 0) {
                        // echo "{$i} {$j} {$k} - {$x} {$y} {$z} {$r}\n";
                        $dup = ($i == $j) + ($i == $k) + ($j == $k);
                        switch ($dup) {
                            case 0:
                                $r = 1;
                                break;
                            case 1:
                                $r = 2;
                                break;
                            case 3:
                                $r = 6;
                                break;
                            default:
                                exit('ERROR');
                        }
                        $ans += $x * $y * $z / $r;
                    }
                }
            }
        }
    }

    echo $ans . PHP_EOL;


<?php
    fscanf(STDIN, "%d", $N);
    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d,%d", $price2[$i], $bar2[$i]);
    }

    $loop = pow(2, $N);
    $ans = PHP_INT_MAX;
    $mmax = 0;
    for ($i = 0; $i < $loop; $i++) {
        $pay = 0;
        $point = 0;
        $price = $price2;
        $bar = $bar2;
        $tmp = decbin($i);
        $tmp = str_pad($tmp, 10, "0", STR_PAD_LEFT);
        // echo "bin:" . $tmp . PHP_EOL;
        $act = str_split($tmp);
        for ($j = 0; $j < $N; $j++) {
            switch ($act[$j]) {
                // ポイントを使わない
                case "0":
                    $pay += $price[$j];
                    $point += floor($price[$j] * $bar[$j] / 100);
                    break;


                // ポイントを使う
                case "1":
                    if ($price[$j] >= $point) {
                        $price[$j] -= $point;
                        $point = 0;
                        $pay += $price[$j];
                        $point += floor($price[$j] * $bar[$j] / 100);
                    } else {
                        $point -= $price[$j];
                    }
                    break;

                default:
                    exit('ERR');
                    break;
            }
            // echo "pay:{$pay} point:{$point}\n";
        }
        // echo $tmp . " " . $pay . PHP_EOL;
        if ($ans > $pay) {
            echo "{$pay} {$tmp} {$point} " . ($pay - $point) . "\n";
            $ans = $pay;
        }
        $mmax = max($mmax, $pay);
        // echo $tmp . " " . $ans . PHP_EOL;
    }
    echo $ans . PHP_EOL;
    echo $mmax . PHP_EOL;


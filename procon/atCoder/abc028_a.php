<?php
    /*
        Problem URL : http://abc029.contest.atcoder.jp/tasks/abc028_a

        Result : AC
        Time   : 57 ms
        Memory : 4496 KB
     */

// Here your code !
    $fp = fopen("php://stdin", "r+");
    $s = trim(fgets($fp));
    
// テストの点数として 0 以上 100 以下の整数を受け取る。
// テストの点数が 59 点以下ならば Bad と出力。
// 60 点以上 89 点以下ならば Good と出力。
// 90 点以上 99 点以下ならば Great と出力。
// 100 点ならば Perfect と出力。

    if ($s <= 59) {
    	echo "Bad\n";
    } elseif ($s <= 89) {
    	echo "Good\n";
    } elseif ($s <= 99) {
    	echo "Great\n";
    } elseif ($s <= 100) {
    	echo "Perfect\n";
    }


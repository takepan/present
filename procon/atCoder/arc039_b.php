<?php
    /*
        Problem URL : https://arc039.contest.atcoder.jp/tasks/arc039_b

        Score  : AC
        Result : 100
        Time   : 67 ms
        Memory : 5500 KB
     */

    define('MOD_NUM', 1000000007);
    $score = 0;

    $fp = fopen("php://stdin", "r+");
    list($N, $K) = explode(" ", trim(fgets($fp)));

    if ($N > $K) {
        // キャンディの数がそもそも足りない場合は、絶対キャンディを貰えない子が
        echo choose($N - 1 + $K, $K) . PHP_EOL;
    } elseif ($N % $K == 0) {
        // キャンディの数が子の倍数なら、すべて数を渡すのが
        echo "1\n";
    } else {
        $tmp = $K % $N;
        echo choose($N, $tmp) . PHP_EOL;
    }

    function choose($a, $b) {
        global $mem;
        $n = 0;

        if (isset($mem[$a][$b])) return $mem[$a][$b];

        if ($b == 0 || $a == $b) {
            $n = 1;
        } else {
            $n = choose($a - 1, $b - 1) + choose($a - 1, $b);
            if ($n > MOD_NUM) $n = $n % MOD_NUM;
        }
        $mem[$a][$b] = $n;
        return $n;
    }


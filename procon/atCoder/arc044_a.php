<?php
    /*
        Problem URL : https://arc044.contest.atcoder.jp/tasks/arc044_a

        Score  : 100
        Result : AC
        Time   : 71 ms
        Memory : 4792 KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    $lenN = strlen($N);
    $keta = 0;

    if ($N == 1) {
        echo "Not Prime\n";
    } elseif (is_prime($N)) {
        echo "Prime\n";
    } else {
        //echo "simo1 : {$N[$lenN-1]}\n";
        $simo1keta = (in_array($N[$lenN-1], array('2', '4', '5', '6', '8', '0')));
        //var_dump($simo1keta);

        for ($i = 0; $i < $lenN; $i++) {
            $keta += $N[$i];
        }
        //echo "keta : {$keta}\n";
        $wareru3 = ($keta % 3) == 0;
        if ($simo1keta !== false || $wareru3 === true) {
            echo "Not Prime\n";
        } else {
            echo "Prime\n";
        }
    }

    function is_prime($N) {
        // 1は素数ではない
        if ($N == 1) return false;

        $arr = array();
        $N_sqrt = sqrt($N);
        $bool = true;
        for ($i = 2; $i <= $N_sqrt; $i++) {
            if ($N % $i == 0) return false;
        }
        return true;
    }

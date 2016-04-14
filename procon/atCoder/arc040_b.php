<?php
    /*
        Problem URL : https://arc040.contest.atcoder.jp/tasks/arc040_b

        Score  : 100
        Result : AC
        Time   : 56 ms
        Memory : 4516 KB
     */


    $fp = fopen("php://stdin", "r+");

    list($N, $R) = explode(" ", trim(fgets($fp)));
    $S = trim(fgets($fp));
    $lenS = strlen($S);
    $walk = 0;
    $shoot = 0;

    for ($i = $lenS - 1; $i >= 0; $i--) {
        // echo "i:" . $i . PHP_EOL;
        $tmp = substr($S, $i, 1);
        if ($tmp == '.') {
            // echo "shoot!\n";
            $shoot++;
            if ($walk == 0 && $i - $R + 1 > 0) {
                $walk = $i - $R + 1;
            }
            for ($j = $i; $j > $i - $R; $j--) {
                // echo "j:" . $j . PHP_EOL;
                if ($j >= 0) {
                    // echo "nuri: $j\n";
                    $S[$j] = 'o';
                }
            }
        }
    }

    // echo "walk: $walk \n";
    // echo "shoot: $shoot \n";
    echo ($walk + $shoot) . PHP_EOL;

<?php
    /*
        Problem URL : https://arc036.contest.atcoder.jp/tasks/arc036_a

        Score  : 100
        Result : AC
        Time   : 251 ms
        Memory : 22148 KB
     */

    $sl = 0;

    $fp = fopen('php://stdin', 'r+');
    list($N, $K) = explode(' ', trim(fgets($fp)));

    // echo $K . PHP_EOL;

    for ($i = 0; $i < $N; ++$i) {
        $t[$i] = trim(fgets($fp));
        switch ($i) {
            case 0:
            case 1:
            case 2:
                $sl += $t[$i];
                break;

            default:
                $sl += $t[$i] - $t[$i - 3];
                break;

        }
        // echo $i . " " . $sl . PHP_EOL;
        if ($K > $sl && $i > 1) {
            echo ($i + 1) . PHP_EOL;
            exit;
        }
    }

    echo '-1' . PHP_EOL;

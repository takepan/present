<?php
    /*
        Problem URL : https://arc041.contest.atcoder.jp/tasks/arc041_a

        Score  : 100
        Result : AC
        Time   : 59 ms
        Memory : 4500 KB
     */

    $fp = fopen("php://stdin", "r+");
    list($x, $y) = explode(" ", trim(fgets($fp)));
    $k = trim(fgets($fp));

    // 表の枚数を点数とする
    $score = $x;

    // ひっくり返すのが裏だけで足りる場合
    if ($y >= $k) {
        $score += $k;
    } else {
        $score += $y;
        $score -= ($k - $y);
    }

    echo $score . PHP_EOL;

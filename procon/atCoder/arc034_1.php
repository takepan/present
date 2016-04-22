<?php
    /*
        Problem URL : http://arc034.contest.atcoder.jp/tasks/arc034_1

        Score  : 100
        Result : AC
        Time   : 61 ms
        Memory : 3772 KB
     */

    $score = 0;
    $answer = 0;

    $fp = fopen('php://stdin', 'r+');
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; ++$i) {
        $arr = explode(' ', trim(fgets($fp)));
        $score = array_sum($arr) - ($arr[4] * 790 / 900);
        $answer = $score > $answer ? $score : $answer;
    }

    echo $answer.PHP_EOL;

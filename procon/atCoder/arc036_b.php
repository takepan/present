<?php
    /*
        Problem URL : https://arc036.contest.atcoder.jp/tasks/arc036_b

        Score  : AC
        Result : 100
        Time   : 447 ms
        Memory : 4580 KB
     */

    $answer = 0;
    $score = 0;
    $memo = 0;
    $mode = 0;
    $prev = null;

    $fp = fopen('php://stdin', 'r+');
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; ++$i) {
        $h = trim(fgets($fp));
        if (is_null($prev)) {

        } else {
            if ($prev < $h) {
                if ($mode == 2) {
                    $score = $i - $memo;
                    $memo = $i - 1;
                    if ($answer < $score) $answer = $score;
                }
                $mode = 1;
            } else {
                $mode = 2;
            }
        }
        $prev = $h;
        // echo "{$i} {$h} {$mode} {$answer}\n";
    }

    $score = $i - $memo;
    if ($answer < $score) $answer = $score;

    echo $answer.PHP_EOL;

<?php
/*
    Problem URL : http://agc002.contest.atcoder.jp/tasks/agc002_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $a, $b);
// echo $a . " " . $b . PHP_EOL;

if ($a <= 0 && $b >= 0) {
    echo "Zero\n";
}

if ($a > 0) {
    echo "Positive\n";
}

if ($b < 0) {
    // echo $b - $a . PHP_EOL;
    if (($b - $a) % 2 === 0)
    {
        echo "Negative\n";
    } else {
        echo "Positive\n";
    }
}

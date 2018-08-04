<?php
/*
    Problem URL : http://abc049.contest.atcoder.jp/tasks/abc049_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d", $n, $a, $b);

if ($a + $b > $n) {
    echo ($a + $b - $n) . PHP_EOL;
} else {
    echo "0\n";
}

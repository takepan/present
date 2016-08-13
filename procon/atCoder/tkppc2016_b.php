<?php
/*
    Problem URL : http://tkppc2.contest.atcoder.jp/tasks/tkppc2016_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $N, $M);

$arr = array($M => 0);
$ans = 0;

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $V, $T);

    foreach ($arr as $key => $val) {
        // やる場合……しかないか
        if ($key >= $T) {
            $tmp = $val + $V;
            $ans = max($ans, $tmp);
            $arr[$key - $T] = max($arr[$key - $T], $tmp);
        }
    }
}

echo $ans . PHP_EOL;

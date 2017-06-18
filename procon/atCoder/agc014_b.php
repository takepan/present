<?php
/*
    Problem URL : http://abc060.contest.atcoder.jp/tasks/abc060_d

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('memory_limit', '256M');

// define('DEBUG', true);
define('DEBUG', false);

$ans = 0;
$mem = array();

fscanf(STDIN, "%d %d", $N, $M);
$arr = array_pad(array(), $N, 0);

for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    if ($a == 1) {
        $arr[$b]++;
    } elseif($b == 1) {
        $arr[$a]++;
    } else {
        $arr[$a]++;
        $arr[$b]++;
    }
}

foreach ($arr as $num) {
    if ($num % 2 == 1) {
        echo "NO\n";
        exit;
    }
}

echo "YES\n";

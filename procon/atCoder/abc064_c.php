<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc064/tasks/abc064_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$sz = 10;
$m = array_pad(array(), $sz, 0);
$mmin = $mmax = $uniq = 0;

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

foreach ($a as $v) {
    if ($v >= 3200) {
        $c = 9;
    } else {
        $c = (int) floor($v / 400);
    }
    $m[$c]++;
}

ksort($m);

for ($i = 0; $i < $sz; $i++) {
    if ($i == 9) {
        if ($m[$i] > 0) {
            if ($mmin == 0) {
                $mmin = 1;
            }
            $mmax += $m[$i];
        }
    } else {
        if ($m[$i] > 0) {
            $mmin += 1;
            $mmax += 1;
        }
    }
}

printf("%d %d\n", $mmin, $mmax);


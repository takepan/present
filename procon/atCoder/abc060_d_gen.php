<?php
/*
    Problem URL : http://abc060.contest.atcoder.jp/tasks/abc060_d

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

$N = rand(1, 100);

$N = 100;

$W = rand(1, pow(10, 9));
$out = "{$N} {$W}\n";
for ($i = 0; $i < $N; $i++) {
    if ($i == 0) {
        $w[$i] = rand(1, pow(10, 9) - 3);
    } else {
        $w[$i] = $w[0] + rand(0, 3);
    }
    $v[$i] = rand(1, pow(10, 7));
    $out .= "{$w[$i]} {$v[$i]}\n";
}
$fp = fopen(__DIR__ . "/abc060_d_gen.dat", "w+");
fputs($fp, $out);
fclose($fp);

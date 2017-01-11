<?php
/*
    Problem URL : http://abc048.contest.atcoder.jp/tasks/abc048_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d", $a, $b, $x);

$mmin = bcdiv($a, $x);
$mminx = bcsub($a, bcmul($x, $mmin));
// var_dump($mminx);
if ($mminx != "0") {
    $mmin = bcadd($mmin, 1);
}

$mmax = bcdiv($b, $x);
// $mmaxx = bcsub($b, bcmul($x, $mmax));

// echo "\$mmin : {$mmin}\n";
// echo "\$mmax : {$mmax}\n";

$ans = bcadd(bcsub($mmax, $mmin), 1);

if ($ans < 0) {
    echo "0\n";
} else {
    echo $ans . "\n";
}

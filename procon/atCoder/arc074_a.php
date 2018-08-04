<?php
/*
    Problem URL : http://arc074.contest.atcoder.jp/tasks/arc074_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $H, $W);

$ans = min($H, $W);

if ($H % 3 == 0 || $W % 3 == 0) {
    echo "0\n";
    exit;
} else {
    for ($y = 1; $y < $H; $y++) {
        $a1 = $y * $W;
        if ($W % 2 == 0) {
            $a2 = $a3 = ($H - $y) * ($W / 2);
        } else {
            $a2 = ($H - $y) * floor($W / 2);
            $a3 = ($H - $y) * ceil($W / 2);
        }
        $mmin = min($a1, $a2, $a3);
        $mmax = max($a1, $a2, $a3);
        $ans = min($ans, $mmax - $mmin);
    }
    $tmp = $H;
    $H = $W;
    $W = $tmp;
    for ($y = 1; $y < $H; $y++) {
        $a1 = $y * $W;
        if ($W % 2 == 0) {
            $a2 = $a3 = ($H - $y) * ($W / 2);
        } else {
            $a2 = ($H - $y) * floor($W / 2);
            $a3 = ($H - $y) * ceil($W / 2);
        }
        $mmin = min($a1, $a2, $a3);
        $mmax = max($a1, $a2, $a3);
        $ans = min($ans, $mmax - $mmin);
    }
}

echo $ans . PHP_EOL;

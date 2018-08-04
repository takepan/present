<?php
/*
    Problem URL : http://abc056.contest.atcoder.jp/tasks/abc056_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d", $W, $a, $b);

$al = $a;
$ar = $a + $W;
$bl = $b;
$br = $b + $W;

if ($al <= $bl && $bl <= $ar) {
    echo "0\n";
    exit;
}
if ($al <= $br && $br <= $ar) {
    echo "0\n";
    exit;
}
$mv = PHP_INT_MAX;
if ($ar < $bl) {
    $mv = min($mv, abs($ar - $bl));
}
if ($al > $br) {
    $mv = min($mv, abs($al - $br));
}

echo $mv . PHP_EOL;

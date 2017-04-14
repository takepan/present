<?php
/*
    Problem URL : http://arc071.contest.atcoder.jp/tasks/arc071_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $n, $m);

define('MOD', pow(10, 9) + 7);

$ans = 0;

$xx = explode(" ", trim(fgets(STDIN)));
$yy = explode(" ", trim(fgets(STDIN)));

$bx = array();
$by = array();
for ($i = 0; $i < $n - 1; $i++) {
    $bx[$i] = ($i + 1) * ($n - $i - 1);
}
for ($i = 0; $i < $m - 1; $i++) {
    $by[$i] = ($i + 1) * ($m - $i - 1);
}
for ($x = 0; $x < $n - 1; $x++) {
    for ($y = 0; $y < $m - 1; $y++) {
        $dx = $xx[$x+1] - $xx[$x];
        $dy = $yy[$y+1] - $yy[$y];
        $tmp = $bx[$x] * $by[$y] * $dx * $dy;
        $ans += ($tmp % MOD);
        if ($ans > MOD) {
            $ans %= MOD;
        }
    }
}
echo $ans . PHP_EOL;

<?php
/*
    http://ddcc2016-qual.contest.atcoder.jp/tasks/ddcc_2016_qual_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d", $R, $N, $M);

// echo "{$R} {$N} {$M}\n";
// exit;

$ans = 0;

$inch = $R / $N;

for ($i = 0; $i <= $N + $M; $i++) {
	$down_address = $i;
	$up_address = $i - $M;
	$down = $R - $down_address * ($R / ($N) * 2);
	$up   = $R - $up_address * ($R / ($N) * 2);
	// echo "DOWN {$down_address} {$up_address} - {$down} {$up}\n";
	$t = max(getA($R, $up), getA($R, $down));
	// echo $t . PHP_EOL;
	$ans += $t * 2;
}

echo $ans . PHP_EOL;



function getA($r, $b) {
	if ($r <= $b) return 0;
	return sqrt(pow($r, 2) - pow($b, 2));
}
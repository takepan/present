<?php
/*
    Problem URL : http://agc003.contest.atcoder.jp/tasks/agc003_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$a = array();
fscanf(STDIN, "%d", $N);
for ($i = 1; $i <= $N; $i++) {
	fscanf(STDIN, "%d", $a[$i]);
}

$dummy = $a;

$calc1 = 0;
$tmp1 = 0;
$tmp2 = 0;
for ($i = 1; $i <= $N; $i++) {
	$tmp1 = floor($a[$i-1] / 2);
	$a[$i-1] -= $tmp1 * 2;
	$tmp2 = floor(($a[$i-1] + $a[$i]) / 2);
	$x = $tmp2 * 2;
	if ($tmp2 > 0) {
		$x -= $a[$i-1];
		$a[$i-1] = 0;
		$a[$i] -= $x;
	}
	$calc1 += ($tmp1 + $tmp2);	
}

$a = $dummy;
$calc2 = 0;
$tmp1 = 0;
$tmp2 = 0;
for ($i = $N; $i >= 1; $i--) {
	$tmp1 = floor($a[$i+1] / 2);
	$a[$i+1] -= $tmp1 * 2;
	$tmp2 = floor(($a[$i+1] + $a[$i]) / 2);
	$x = $tmp2 * 2;
	if ($tmp2 > 0) {
		$x -= $a[$i+1];
		$a[$i+1] = 0;
		$a[$i] -= $x;
	}
	$calc2 += ($tmp1 + $tmp2);	
}

echo max($calc1, $calc2) . PHP_EOL;

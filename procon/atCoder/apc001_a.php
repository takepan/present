<?php
/*
Problem URL : https://apc001.contest.atcoder.jp/tasks/apc001_a

Score  :
Result :
Time   :  ms
Memory :  KB
 */

fscanf(STDIN, "%d %d", $X, $Y);

if ($X == $Y) {
	echo "-1" . "\n";
	exit;
}

$mmax = max($X, $Y);
$mmin = min($X, $Y);
$mod = $mmax % $mmin;
$mul = $mmax / $mmin;

for ($i = 2; $i < 10; $i++) {
	if ($mmin * $i != $mmax) {
		echo $mmin * $i . "\n";
		exit;
	}
}

for ($i = 2; $i < 10; $i++) {
	if ($mmin != $mmax * $i) {
		echo $mmax * $i . "\n";
		exit;
	}
}

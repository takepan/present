<?php
/*
    http://agc006.contest.atcoder.jp/tasks/agc006_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $N, $x);

// echo "{$N} {$x}\n";
// exit;

$len = $N * 2 - 1;

if ($x == 1 || $x == $len) {
	echo "No" . PHP_EOL;
	exit;
}


$stock = array();
for ($i = 1; $i < $x - 1; $i++) {
	$stock[] = $i;
}
for ($i = $x + 2; $i <= $len; $i++) {
	$stock[] = $i;
}
// var_dump($stock);

$ans = array();
$ans[$N - 1] = $x;
$ans[$N - 2] = $x-1;
$ans[$N] = $x+1;
// var_dump($ans);

for ($i = 0; $i < $N - 2; $i++) {
	// echo "count1 = " . count($stock) . PHP_EOL;
	$ans[$i] = array_pop($stock);
	// var_dump($ans);
}
for ($i = 0; $i < $N - 2; $i++) {
	// echo "count2 = " . count($stock) . PHP_EOL;
	$ans[$i + $N + 1] = array_pop($stock);
	// var_dump($ans);
}
ksort($ans);
echo "Yes\n";
echo implode(" ", $ans) . PHP_EOL;
// echo kenzan($ans) . PHP_EOL;
exit;

for ($i = 1; $i <= 9; $i++) {
	$arr[$i] = $i;
}

$mmin = PHP_INT_MAX;
$mmax = 0;

for ($loop = 0; $loop < 10000; $loop++) {

	$arr2 = $arr;
	shuffle($arr2);
	$orig = $arr2;
	// echo implode(" ", $arr2) . " -> ";
	while (count($arr2) > 1) {
		$arr3 = array();
		for ($i = 0; $i < count($arr2) - 2; $i++) {
			$arr3[$i] = med($arr2[$i], $arr2[$i+1], $arr2[$i+2]);
		}
		// echo implode(" ", $arr3) . PHP_EOL;
		$arr2 = $arr3;
	}
if ($arr2[0] == 2) echo "[2] " . implode(" ", $orig) . PHP_EOL;
if ($arr2[0] == 8) echo "[8] " . implode(" ", $orig) . PHP_EOL;
// echo $arr2[0] . PHP_EOL;
	$mmin = min($mmin, $arr2[0]);
	$mmax = max($mmax, $arr2[0]);
}

// echo "{$mmin} {$mmax}\n";

function med($a, $b, $c) {
	return ($a + $b + $c) - max($a, $b, $c) - min($a, $b, $c);

	if ($a >= $b && $b >= $c) {
		return $b; 
	} elseif ($a >= $c && $c >= $b ) {
		return $c;
	} else {
		return $a;
	}
}

function kenzan($a) {
	var_dump($a);
	$arr2 = $a;
	while (count($arr2) > 1) {
		// echo "count:" . count($arr2). PHP_EOL;
		$arr3 = array();
		for ($i = 0; $i < count($arr2) - 2; $i++) {
			$arr3[$i] = med($arr2[$i], $arr2[$i+1], $arr2[$i+2]);
		}
		// echo implode(" ", $arr3) . PHP_EOL;
		$arr2 = $arr3;
	}
	// echo "kenzan: " . $arr2[0] . PHP_EOL;	
}
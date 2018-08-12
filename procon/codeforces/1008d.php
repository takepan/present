<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$answer = 0;

// var_dump(solve(100));
// exit;

function solve($n) {
	$array = array();
	for ($i = 1; $i <= sqrt($n); $i++) {
		if ($n % $i == 0) {
			$array[$n / $i] = 1;
			$array[$i] = 1;
		}
	}
	$sort = array_keys($array);
	sort($sort);
	return $sort;
}

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
	$sum = array();
	fscanf(STDIN, "%d %d %d", $A, $B, $C);
	$arrayA = solve($A);
	var_dump($arrayA);
	$arrayB = solve($B);
	var_dump($arrayB);
	$arrayC = solve($C);
	var_dump($arrayC);
	for ($j = 0; $j < count($arrayA); $j++) {
		for ($k = 0; $k < count($arrayB); $k++) {
			for ($l = 0; $l < count($arrayC); $l++) {
				$tmp = array($arrayA[$j], $arrayB[$k], $arrayC[$l]);
				sort($tmp);
				$str = implode("-", $tmp);
				$sum[$str] = 1;
			}
		}
	}
	var_dump(array_keys($sum));
	echo count($sum) . PHP_EOL;
}

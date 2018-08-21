<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);

$neg = $N < 0;
if ($neg) {
	$N = -$N;
}
$bin = decbin($N);
if (DEBUG) {
	echo $bin . PHP_EOL;
}

$array = str_split($bin);
$array = array_reverse($array);

$cursor = 0;
while (true) {
	if (!isset($array[$cursor])) {
		break;
	}
	if ($array[$cursor] == 2) {
		$array[$cursor] = 0;
		$array[$cursor + 1]++;
	}
	if ($neg) {
		if ($cursor % 2 == 0) {
			if ($array[$cursor] == 1) {
				$array[$cursor + 1]++;
			}
		}
	} else {
		if ($cursor % 2 == 1) {
			if ($array[$cursor] == 1) {
				$array[$cursor + 1]++;
			}
		}
	}
	if (DEBUG) {
		echo implode("", array_reverse($array)) . PHP_EOL;
	}

	$cursor++;
}

if (DEBUG) {
	var_dump($array);
}

$array = array_reverse($array);
echo implode("", $array);

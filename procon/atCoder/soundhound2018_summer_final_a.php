<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

// define('DEBUG', true);
define('DEBUG', false);

$array = [];

$low = 140;
$high = 170;

while (true) {
	if ($low > pow(10, 15)) {
		// $array[] = array('low' => pow(10, 15), 'max' => pow(10, 15));
		break;
	}

	$array[] = array('low' => $low, 'high' => $high);
	$low *= 2;
	$high *= 2;
}

// var_dump($array);

fscanf(STDIN, "%d %d", $C, $D);

$answer = 0;

foreach ($array as $val) {
	if (DEBUG) {
		echo "low:{$val['low']} high:{$val['high']}\n";
	}

	if ($C >= $val['high']) {
		continue;
	}

	if ($D <= $val['low']) {
		continue;
	}

	if ($C < $val['low']) {
		$lower_limit = $val['low'];
	} else {
		$lower_limit = $C;
	}
	if ($D > $val['high']) {
		$upper_limit = $val['high'];
	} else {
		$upper_limit = $D;
	}
	if (DEBUG) {
		echo "{$lower_limit}-{$upper_limit}\n";
	}

	$answer += $upper_limit - $lower_limit;
}
echo $answer;

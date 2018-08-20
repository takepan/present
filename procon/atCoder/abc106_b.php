<?php
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);

$answer = 0;
for ($i = 1; $i <= $N; $i += 2) {
	if (solve($i) === true) {
		$answer++;
	}
}
echo $answer;

function solve($num) {
	$array = array();
	for ($i = 1; $i <= sqrt($num); $i++) {
		if ($num % $i === 0) {
			$pair = $num / $i;

			$array[] = $i;
			if ($i != $pair) {
				$array[] = $pair;
			}

		}
	}
	if (DEBUG) {
		if (count($array) === 8) {
			var_dump($array);
		}
	}
	return count($array) === 8;
}
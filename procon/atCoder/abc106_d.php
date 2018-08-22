<?php
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d", $N, $M, $Q);

// N×Nをまず作る
for ($i = 1; $i <= $N; $i++) {
	$array[$i] = array_pad(array(), $N + 1, 0);
}

for ($i = 1; $i <= $M; $i++) {
	fscanf(STDIN, "%d %d", $L, $R);
	$array[$L][$R]++;
}

if (DEBUG) {
	var_dump($array);
}

if (DEBUG) {
	echo "syukei====\n";
}

for ($y = $N; $y > 0; $y--) {
	for ($x = 1; $x <= $N; $x++) {
		if (DEBUG) {
			echo "{$x} {$y}\n";
		}

		if ($y == $N && $x == 1) {

		} elseif ($x == 1) {
			$array[$y][$x] += $array[$y + 1][$x];
		} elseif ($y == $N) {
			$array[$y][$x] += $array[$y][$x - 1];
		} else {
			$array[$y][$x] += $array[$y][$x - 1] + $array[$y + 1][$x] - $array[$y + 1][$x - 1];
		}
	}
}
if (DEBUG) {
	var_dump($array);
}

for ($i = 0; $i < $Q; $i++) {
	fscanf(STDIN, "%d %d", $p, $q);
	echo $array[$p][$q] . PHP_EOL;
}
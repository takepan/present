<?php
fscanf(STDIN, "%d %d", $N, $M);
$num = 0;
$array = array();
for ($i = 0; $i < $M; $i++) {
	fscanf(STDIN, "%d %d", $X, $D);
	// $num += $X * $N;
	$array[] = $X * $N;
	if ($D < 0) {
		if ($N % 2 == 0) {
			// 長さ2 なら 0 1             = 1
			// 長さ4 なら 1 0 1 2         = 4
			// 長さ6 なら 2 1 0 1 2 3     = 9
			// 長さ8 なら 3 2 1 0 1 2 3 4 = 16
			$a = (1 + $N / 2) * ($N / 2) - $N / 2;
			// echo "A {$a}\n";
			// $bonus = $a * $D;
			$array[] = $a * $D;
		} else {
			// 長さ1 なら 0
			// 長さ3 なら 1 0 1
			$N2 = $N - 1;
			$a = (1 + $N2 / 2) * ($N2 / 2);
			// echo "B\n";
			// $bonus = $a * $D;
			$array[] = $a * $D;
		}
	} else {
		// echo "C\n";
		$a = (0 + $N - 1) * $N / 2;
		// $bonus = $a * $D;
		$array[] = $a * $D;
	}
	// echo $bonus . PHP_EOL;
	// $num += $bonus;
}
usort($array, "abs_rorder");

$num = 0;
foreach ($array as $x) {
	$num += $x;
}

echo $num / $N;

function abs_order($a, $b) {
	return abs($a) > abs($b);
}

function abs_rorder($a, $b) {
	return abs($a) < abs($b);
}

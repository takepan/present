<?php
fscanf(STDIN, "%d %d", $N, $K);
$x = explode(" ", trim(fgets(STDIN)));

$answer = PHP_INT_MAX;

for ($i = 0; $i < $N - $K + 1; $i++) {
	$tmp = 0;
	if ($x[$i] < 0) {
		$tmp -= $x[$i];
		$tmp += $x[$i + $K - 1] - $x[$i];
	} else {
		$tmp = $x[$i + $K - 1];
	}

	$answer = min($answer, $tmp);

	// 0以上なら抜ける
	if ($x[$i] >= 0) {
		break;
	}
}
for ($i = $N - 1; $i >= $K - 1; $i--) {
	$tmp = 0;
	if ($x[$i] > 0) {
		$tmp += $x[$i];
		// echo $tmp . PHP_EOL;
		$tmp += abs($x[$i] - $x[$i - $K + 1]);
		// echo $tmp . PHP_EOL;
	} else {
		$tmp = -$x[$i - $K + 1];
		// echo $tmp . PHP_EOL;
	}
	// echo $tmp . PHP_EOL;
	// echo PHP_EOL;

	$answer = min($answer, $tmp);

	// 0以上なら抜ける
	if ($x[$i] <= 0) {
		break;
	}
}

echo $answer;
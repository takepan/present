<?php
// $a = microtime(true);
$cnt = 0;
$v = $u = array();
$sum = array();
for ($i = 1; $i < 600; $i++) {
	for ($j = 1; $j < $i - 1; $j++) {
		if (__gcd($i, $j) == 1) {
			//echo "{$i} {$j}\n";
			$v[] = $i;
			$u[] = $j;
			$cnt++;
		}
	}
	$sum[$i] = $cnt;
}
// $b = microtime(true);
// echo $cnt . PHP_EOL;
// echo $b - $a;
// var_dump($sum);

fscanf(STDIN, "%d %d", $n, $m);
if ($n == 1 && $m == 1) {
	echo "Impossible";
} else if ($n > $m + 1) {
	echo "Impossible";
} else {
	$extra = $m - ($n - 1);
	// echo "extra:{$extra}\n";

	if ($n >= 600 || $sum[$n] >= $extra) {
		echo "Possible\n";
		for ($i = 1; $i < $n; $i++) {
			printf("%d %d\n", $i, $i + 1);
		}
		for ($i = 0; $i < $extra; $i++) {
			printf("%d %d\n", $v[$i], $u[$i]);
		}
	} else {
		echo "Impossible";
	}
}

function __gcd($a, $b) {
	if ($a == 0 || $b == 0) {
		return abs(max(abs($a), abs($b)));
	}

	$r = $a % $b;
	return ($r != 0) ? __gcd($b, $r) : abs($b);
}
<?php
// $a = microtime(true);
$cnt = 0;
$v = $u = array();
$sum = array();
for ($i = 1; $i < 600; $i++) {
	for ($j = 1; $j < $i; $j++) {
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
if ($n >= 600 || $sum[$n] >= $m) {
	echo "Possible\n";
	for ($i = 0; $i < $m; $i++) {
		if ($i != 0) {
			echo "\n";
		}

		printf("%d %d\n", $v[$i], $u[$i]);
	}
} else {
	echo "Impossible";
}

function __gcd($a, $b) {
	if ($a == 0 || $b == 0) {
		return abs(max(abs($a), abs($b)));
	}

	$r = $a % $b;
	return ($r != 0) ? __gcd($b, $r) : abs($b);
}
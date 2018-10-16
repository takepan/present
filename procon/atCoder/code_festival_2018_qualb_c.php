<?php
// define('DEBUG', true);
define('DEBUG', false);

$cnt = 0;

fscanf(STDIN, "%d", $N);
$W = array_pad([], $N, ".");
for ($i = 0; $i < $N; $i++) {
	$m[] = $W;
}

for ($x = -1; $x <= $N; $x++) {
	$ys = (($x * 2) + 1) % 5;
	if ($ys == 4) {
		$ys = -1;
	}
	for ($y = $ys; $y <= $N; $y += 5) {
		// echo "{$x} {$y}";
		$yy = $y;
		$xx = $x;
		if ($y == $N) {
			$yy = $y - 1;
		}
		if ($y == -1) {
			$yy = $y + 1;
		}
		if ($x == $N) {
			$xx = $x - 1;
		}
		if ($x == -1) {
			$xx = $x + 1;
		}
		if ($m[$yy][$xx] == ".") {
			// echo " -> {$xx} {$yy}" . PHP_EOL;
			$m[$yy][$xx] = "X";
			$cnt++;
		}
		// echo PHP_EOL;
	}
}
// echo "COUNT: " . $cnt . PHP_EOL;
// exit;
for ($i = 0; $i < $N; $i++) {
	echo implode("", $m[$i]) . PHP_EOL;
}

for ($x = 0; $x < $N; $x++) {
	for ($y = 0; $y < $N; $y++) {
		if ($m[$y][$x] == "X") continue;
		if ($m[$y-1][$x] == "X") continue;
		if ($m[$y+1][$x] == "X") continue;
		if ($m[$y][$x-1] == "X") continue;
		if ($m[$y][$x+1] == "X") continue;
		exit($x . " " . $y . 'FUCK');
	}
}

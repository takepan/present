<?php
fscanf(STDIN, "%d", $N);
$X = explode(" ", trim(fgets(STDIN)));
$Y = $X;
sort($Y);

$n1 = $Y[$N / 2 - 1];
$n2 = $Y[$N / 2];

// echo "{$n1} {$n2}\n";

for ($i = 0; $i < $N; $i++) {
	if ($n2 <= $X[$i]) {
		echo $n1;
	} else {
		echo $n2;
	}
	echo PHP_EOL;
}

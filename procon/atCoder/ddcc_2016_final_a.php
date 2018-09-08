<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $R, $C);

$ans = 0;

for ($i = floor($R / $C); $i > 0; $i--) {
	// echo $i . PHP_EOL;
	$a = pow($R, 2);
	$a -= pow($i * $C, 2);
	$b = sqrt($a);
	$b = floor($b / $C);
	// printf("%d * %d\n", $i, $b);

	$ans += $b;
}
echo $ans * 4;

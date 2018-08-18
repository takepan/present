<?php
// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $a, $b);
if (bcmod($b, 2) === 0) {
	$small_max = bcsub(bcdiv($b, 2), 1);
} else {
	$small_max = bcdiv(bcsub($b, 1), 2);
}

if (bcsub($b, $a) > 1) {
	$small_min = bcsub($b, $a);
} else {
	$small_min = 1;
}

// echo "{$small_min} {$small_max}\n";

$f3 = bcadd(bcsub($small_max, $small_min), 1);

if ($f3 > 0) {
	printf("%d", $f3);
} else {
	echo "0";
}

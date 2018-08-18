<?php
// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $a, $b);
if ($b % 2 === 0) {
	$small_max = $b / 2 - 1;
} else {
	$small_max = ($b - 1) / 2;
}

$small_min = max(1, $b - $a);

// echo "{$small_min} {$small_max}\n";

echo max(0, $small_max - $small_min + 1);

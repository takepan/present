<?php
// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d %d %d %d", $n, $h, $a, $b, $k);
for ($i = 0; $i < $k; $i++) {
	fscanf(STDIN, "%d %d %d %d", $ta, $fa, $tb, $fb);
	$a_cost = 0;
	$b_cost = 0;
	$f_cost = 0;
	$t_cost = 0;
	if ($ta != $tb) {
		if ($fa > $b) {
			$a_cost = $fa - $b;
		} elseif ($fa < $a) {
			$a_cost = $fa - $a;
		} else {
			$a_cost = 0;
		}
		if ($fb > $b) {
			$b_cost = $fb - $b;
		} elseif ($fb < $a) {
			$b_cost = $fb - $a;
		} else {
			$b_cost = 0;
		}
		if (DEBUG) {
			echo $a_cost, "*", $b_cost . PHP_EOL;
		}

		if ($a_cost * $b_cost <= 0) {
			$a_cost = $b_cost = 0;
		} else {
			$a_cost = abs($a_cost);
			$b_cost = abs($b_cost);
		}
		$f_cost = abs($fa - $fb);
		$t_cost = abs($ta - $tb);
	} else {
		$f_cost = abs($fa - $fb);
	}
	if (DEBUG) {
		echo "{$a_cost} {$b_cost}\n";
	}

	$cost = $a_cost + $b_cost + $f_cost + $t_cost;

	echo $cost . PHP_EOL;
}

<?php
// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d %d %d %d", $n, $h, $a, $b, $k);
for ($i = 0; $i < $k; $i++) {
	fscanf(STDIN, "%d %d %d %d", $ta, $fa, $tb, $fb);
	if ($ta == $tb) {
		$answer = abs($fa - $fb);
	} else {
		$flag_a = false;
		$flag_b = false;
		$cost_a = $cost_b = 0;

		if ($fa <= $a && $b <= $fa) {

		} else {
			if ($fa < $a) {
				$cost_a = $a - $fa;
			} elseif ($fa > $b) {
				$cost_a = $b - $fa;
			}
		}
		if ($fb <= $a && $b <= $fb) {

		} else {
			if ($fb < $a) {
				$cost_b = $a - $fb;
			} elseif ($fb > $b) {
				$cost_b = $b - $fb;
			}
		}

		if (DEBUG) {
			echo $cost_a, "!", $cost_b, PHP_EOL;
		}

		if ($cost_a * $cost_b <= 0) {
			// $cost_a = $cost_b = 0;
			$cost_a = abs($fb - $fa);
			$cost_b = 0;
		}
		if (DEBUG) {
			echo $cost_a, "*", $cost_b, PHP_EOL;
		}

		$answer = abs($cost_a) + abs($cost_b) + abs($ta - $tb);
	}
	echo $answer . PHP_EOL;
}

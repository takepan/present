<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$answer = "YES";

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%d %d", $a, $b);
	if (!isset($cur)) {
		$cur = max($a, $b);
	} else {
		$mmax = max($a, $b);
		$mmin = min($a, $b);

		if ($mmax <= $cur) {
			$cur = $mmax;
		} else if ($mmin <= $cur) {
			$cur = $mmin;
		} else {
			$answer = "NO";
		}
	}
}

echo $answer;

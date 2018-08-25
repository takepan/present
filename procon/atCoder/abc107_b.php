<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $H, $W);

for ($y = 0; $y < $H; $y++) {
	fscanf(STDIN, "%s", $S);
	$a[$y] = str_split($S);
	for ($x = 0; $x < count($a[$y]); $x++) {
		if ($a[$y][$x] == "#") {
			$sumX[$x]++;
			$sumY[$y]++;
		}
	}
}

for ($y = 0; $y < $H; $y++) {
	if ($sumY[$y] == 0) {
		continue;
	}

	for ($x = 0; $x < $W; $x++) {
		if ($sumX[$x] == 0) {
			continue;
		}

		echo $a[$y][$x];
	}
	echo "\n";
}

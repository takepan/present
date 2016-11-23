<?php
	fscanf(STDIN, "%s", $S);
	// echo $S . PHP_EOL;
	$lenS = strlen($S);
	$row = substr($S, 0, $lenS - 1);
	$row--;
	$col = substr($S, $lenS - 1);
	$seat = "fedabc";
	// echo $row . $col . PHP_EOL;

	$sec1 = floor($row / 4);
	$sec2 = $row % 2;
	$sec3 = strpos($seat, $col);
	// echo "{$sec1}:{$sec2}:{$sec3}\n";
	$ans = $sec1 * 12 + $sec2 * 6 + $sec1 * 3 + $sec2 + $sec1 + $sec3 + 1;

	echo $ans;

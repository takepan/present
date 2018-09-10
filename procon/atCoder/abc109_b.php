<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);

$bool = true;

for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%s", $W);
	if (isset($dict[$W])) {
		$bool = false;
		break;
	} else {
		$dict[$W] = 1;
	}
	if (!isset($prev)) {
	} else {
		$first = substr($W, 0, 1);
		if ($first != $prev) {
			$bool = false;
			break;
		}
	}
	$prev = substr($W, -1);
}

echo $bool ? "Yes" : "No";

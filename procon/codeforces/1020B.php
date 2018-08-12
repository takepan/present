<?php
// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $n);
$p = explode(" ", trim(fgets(STDIN)));
if (DEBUG) {
	var_dump($p);
}

for ($i = 1; $i <= $n; $i++) {
	$array = array_pad(array(), $n + 1, 0);
	if (DEBUG) {
		var_dump($array);
	}

	$point = $i;
	while (true) {
		if (DEBUG) {
			echo "-----\n";
		}

		if (DEBUG) {
			echo $point . PHP_EOL;
		}

		$array[$point]++;
		if ($array[$point] == 2) {
			$answer[] = $point;
			break;
		}
		$point = $p[$point - 1];
	}
}
echo implode(" ", $answer);

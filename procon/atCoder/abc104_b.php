<?php
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $S);
// fscanf(STDIN, "%d %d", $N, $K);
// $a = explode(" ", trim(fgets(STDIN)));

$array = str_split($S);
$count = count($array);
$bool = true;
$countC = 0;

for ($i = 0; $i < $count; $i++) {
	if (DEBUG) {
		echo $i . PHP_EOL;
	}

	if ($i == 0) {
		if ($array[$i] != 'A') {
			if (DEBUG) {
				echo "NOT FIRST A\n";
			}

			$bool = false;
		}
	} elseif ($i >= 2 && $i < $count - 1) {
		if (DEBUG) {
			echo "middle ";
		}

		if ($array[$i] == 'C') {
			$countC++;
		} elseif (strtoupper($array[$i]) == $array[$i]) {
			if (DEBUG) {
				echo "NOT lower\n";
			}
			$bool = false;
		}
	} else {
		if (strtoupper($array[$i]) == $array[$i]) {
			if (DEBUG) {
				echo "OTHER NOT lower\n";
			}

			$bool = false;
		}
	}
}

if ($countC != 1) {
	if (DEBUG) {
		echo "C COUNT NOT 1\n";
	}

	$bool = false;
}

echo $bool ? "AC" : "WA";
